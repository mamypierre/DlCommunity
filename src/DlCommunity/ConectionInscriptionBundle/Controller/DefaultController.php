<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\ConectionInscriptionBundle\Form\PictureType ;
class DefaultController extends Controller {

    public function indexAction(\Symfony\Component\HttpFoundation\Request $request) {
        $image = new \DlCommunity\CoreBundle\Entity\Picture();

        $formulaire = $this->get('form.factory')->create(PictureType::class, $image)  ;             
                

        if ($request->isMethod('POST')) {
            
            $formulaire->handleRequest($request);
            if ($formulaire->isValid()) {
                
                print_r($image);
                
            }
        }
        
        
        return $this->render('@DlCommunityConectionInscription/Default/index.html.twig',array('form'=>$formulaire->createView()));
    }

}
