<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\CoreBundle\Entity\Information;
use DlCommunity\CoreBundle\Form\InformationType;

class InscriptionController extends Controller {

    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request) {

        $manager = $this->getDoctrine()->getManager();

        $information = new Information();

        $informationStatue = $manager->getRepository('DlCommunityCoreBundle:Information_status')
                ->findOneBystatusType('Other');

        $formulaire = $this->createForm(InformationType::class, $information, array('info_statu' => $informationStatue));
        

        if ($request->isMethod('POST')) {

            $formulaire->handleRequest($request);

            if ($formulaire->isValid()) {

                $is_in_base = $manager->getRepository('DlCommunityCoreBundle:Information')->isINinformation($information);
  
                print_r($is_in_base[0]->getInformationStatus()->isDl());
                

                //$manager->persist($information);
                // print_r($information);
                // print_r($information->getInformationStatus());
                //$manager->flush();

                return new \Symfony\Component\HttpFoundation\Response("c'est bien enregister");
            }
        }


        return $this->render('@DlCommunityConectionInscription/Default/inscription_form.html.twig', array('my_form' => $formulaire->createView()));
    }

}
