<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\CoreBundle\Entity\Information;
use DlCommunity\CoreBundle\Entity\User;
use DlCommunity\CoreBundle\Form\InformationType;
use DlCommunity\CoreBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class InscriptionController extends Controller implements ContainerAwareInterface {
    
    /**
     * @var ContainerInterface
     */
    public $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request ) {
        
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
                
                //encodage pasword
                               
                $encoder = $this->container->get('security.password_encoder');
                $password = $encoder->encodePassword($user, $user->getPassword());
                $user->setPassword($password);
                
                //verifier si l'information existe déja
                $isINinformation = $manager->getRepository('DlCommunityCoreBundle:Information')->isINinformation($information);

                if ($isINinformation) {

                    $userInfo = $manager->getRepository('DlCommunityCoreBundle:User')
                            ->isInUser($isINinformation[0]);
                    //test existance user
                    if ($userInfo) {
                        $this->messageSession('isUser', 'connecter vous avec votre identifiant');
                        return $this->redirectToRoute('login');
                    } else {
                        //print_r($isINinformation[0]);
                        if($isINinformation[0]->getInformationStatus()->getStatusType()=='DlAfpa'||$isINinformation[0]->getInformationStatus()->getStatusType()=='CDI'){
                            $user->setRoles(array('ROLE_AFPA'));
                            
                        }
                        
                        $this->inserUser($isINinformation[0], $imageProfil_default, $manager , $user);
                        $this->messageSession('success', 'felicitation vous pouvez vous enregistre');
                        return $this->redirectToRoute('login');
                    }
                    //print_r($isINinformation);
                } else {
                    //set clé etranger information
                    $this->inserUser($information, $imageProfil_default, $manager, $user);
                    $this->messageSession('success', 'felicitation vous pouvez vous enregistre');
                        return $this->redirectToRoute('login');
                }
            }
        }
            
            if($pseudo){
                $this->messageSession('error', 'pseudo existe deja');
            }
            if($email){
                $this->messageSession('error', 'email existe deja');
            }        
          
        return $this->render('@DlCommunityConectionInscription/Default/inscription_form.html.twig', array(
                    'form_Info_stat' => $formulaireInfo->createView(), 'formulaireUser' => $formulaireUser->createView()));
    }

    public function inserUser($information, $imageProfil_default ,$manager, $user) {
        
        $informationStatueDefault = $manager->getRepository('DlCommunityCoreBundle:Information_status')
                ->findOneBystatusType('Other');
        
        
        $information->setInformationStatus($informationStatueDefault);
        //set clé etranger user 
        $user->setInformation($information)
                ->setPicture($imageProfil_default);

        //persiste               
        $manager->persist($user);
        //on commit
        $manager->flush();

        
    }
    public function messageSession($attribu, $message){
        $session = new Session();
        $session->getFlashBag()->add($attribu, $message);
    }

}
