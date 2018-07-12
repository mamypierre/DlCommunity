<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\CoreBundle\Entity\Information;
use DlCommunity\CoreBundle\Entity\User;
use DlCommunity\CoreBundle\Entity\Validation_type;
use DlCommunity\CoreBundle\Form\InformationType;
use DlCommunity\CoreBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;

class InscriptionController extends Controller {

    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request) {

        $manager = $this->getDoctrine()->getManager();

        //objet a hydrater
        $information = new Information();
        $user = new User();
        //objet pardefaut
        
        
        $imageProfil_default = $manager->getRepository('DlCommunityCoreBundle:Picture')
                ->findOneBytitle('image_profil');
        

        //creation formulaire
        $formulaireInfo = $this->createForm(InformationType::class, $information);
        $formulaireUser = $this->createForm(UserType::class, $user);
        
        $pseudo =array();
        $email = array();
        if ($request->isMethod('POST')) {

            $formulaireInfo->handleRequest($request);
            $formulaireUser->handleRequest($request);
            $repositoryUser = $manager->getRepository('DlCommunityCoreBundle:User');
            $pseudo = $repositoryUser->isInUser_pseudo($user->getPseudo());
            $email = $repositoryUser->isInUser_email($user->getEmailInscription()) ;
            
            if ($formulaireUser->isValid() && $formulaireInfo->isValid() && !$pseudo && !$email) {

                $isINinformation = $manager->getRepository('DlCommunityCoreBundle:Information')->isINinformation($information);

                if ($isINinformation) {

                    $userInfo = $manager->getRepository('DlCommunityCoreBundle:User')
                            ->isInUser($isINinformation[0]);
                    //test existance user
                    if ($userInfo) {
                        if ($userInfo[0]->getValidationType()->getValidationType() == 'valider') {
                            // print('veuillez vous connecter');
                            return new \Symfony\Component\HttpFoundation\Response("veuillez vous connecter");
                        } elseif ($userInfo[0]->getValidationType()->getValidationType() == 'encour') {
                            //print('veuillez attendre la validation de votre inscription');
                            return new \Symfony\Component\HttpFoundation\Response("veuillez attendre la validation de votre inscription");
                        } else {
                            //echo'desoler votre inscription est non valider';
                            return new \Symfony\Component\HttpFoundation\Response("desolé votre inscription est non validé");
                        }
                    } else {
                        $this->inserUser($isINinformation[0],'Base', 'valider' , $imageProfil_default, $manager , $user);
                        return new \Symfony\Component\HttpFoundation\Response("c'est bien enregistrer");
                    }
                    //print_r($isINinformation);
                } else {
                    //set clé etranger information
                    $this->inserUser($information, 'waite', 'encour' , $imageProfil_default, $manager, $user);
                    return new \Symfony\Component\HttpFoundation\Response("c'est bien enregistrer");
                }
            }
        }
            $session = new Session();
            if($pseudo){
                $session->getFlashBag()->add('error', 'pseudo existe deja');
            }
            if($email){
                $session->getFlashBag()->add('error', 'email existe deja');
            }

        return $this->render('@DlCommunityConectionInscription/Default/inscription_form.html.twig', array(
                    'form_Info_stat' => $formulaireInfo->createView(), 'formulaireUser' => $formulaireUser->createView()));
    }

    public function inserUser($information, $userType, $valType, $imageProfil_default ,$manager, $user) {
        
        $informationStatueDefault = $manager->getRepository('DlCommunityCoreBundle:Information_status')
                ->findOneBystatusType('Other');
        
        $userType_default = $manager->getRepository('DlCommunityCoreBundle:User_type')
                ->findOneByuserType($userType);
        
        $validationType = new Validation_type();
        $validationType->setValidationType($valType);
        
        $information->setInformationStatus($informationStatueDefault);
        //set clé etranger user 
        $user->setInformation($information)
                ->setPicture($imageProfil_default)
                ->setUserType($userType_default)
                ->setValidationType($validationType);

        //persiste               
        $manager->persist($user);
        //on commit
        $manager->flush();

        
    }

}
