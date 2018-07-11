<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\CoreBundle\Entity\Information;
use DlCommunity\CoreBundle\Entity\User;
use DlCommunity\CoreBundle\Entity\Validation_type;
use DlCommunity\CoreBundle\Form\InformationType;
use DlCommunity\CoreBundle\Form\UserType;

class InscriptionController extends Controller {

    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request) {

        $manager = $this->getDoctrine()->getManager();
        
        $userInfo = $manager->getRepository('DlCommunityCoreBundle:User')
                                      ->getUser_information();
        print_r($userInfo);
        /*//objet a hidrater
        $information = new Information();
        $user = new User();
        //objet pardefaut
        $informationStatueDefault = $manager->getRepository('DlCommunityCoreBundle:Information_status')
                ->findOneBystatusType('Other');
        $userType_default = $manager->getRepository('DlCommunityCoreBundle:User_type')
                ->findOneByuserType('waite');
        $imageProfil_default = $manager->getRepository('DlCommunityCoreBundle:Picture')
                ->findOneBytitle('image_profil');
        $validationType = new Validation_type();
            $validationType->setValidationType('encour');
        
        //creation formulaire
        $formulaireInfo = $this->createForm(InformationType::class, $information);
        $formulaireUser = $this->createForm(UserType::class, $user);

        if ($request->isMethod('POST')) {

            $formulaireInfo->handleRequest($request);
            $formulaireUser->handleRequest($request);
            if ($formulaireUser->isValid() && $formulaireInfo->isValid()) {
                
                $isINinformation = $manager->getRepository('DlCommunityCoreBundle:Information')->isINinformation($information);
                
                if($isINinformation){
                    
                    print_r($isINinformation);
                }
                //set clé etranger information
                $information->setInformationStatus($informationStatueDefault);
                //set clé etranger user 
                $user->setInformation($information)
                     ->setPicture($imageProfil_default)
                     ->setUserType($userType_default)
                     ->setValidationType($validationType);
                
                
               //print_r($user);
                //print_r($information);
                
                //persiste               
               //$manager->persist($user);
                 //on commit
                //$manager->flush();

                return new \Symfony\Component\HttpFoundation\Response("c'est bien enregister");
            }
        }


        return $this->render('@DlCommunityConectionInscription/Default/inscription_form.html.twig', array(
            'form_Info_stat' => $formulaireInfo->createView(),'formulaireUser'=>$formulaireUser->createView())); */
        return new \Symfony\Component\HttpFoundation\Response('') ;
    }

}
