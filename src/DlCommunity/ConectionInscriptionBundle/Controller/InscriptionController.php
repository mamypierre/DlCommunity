<?php

namespace DlCommunity\ConectionInscriptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DlCommunity\CoreBundle\Entity\Information;
use DlCommunity\CoreBundle\Form\InformationType;

class InscriptionController extends Controller {

    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request) {

        $manager = $this->getDoctrine()->getManager();

        $information = new Information();
        $userType = new \DlCommunity\CoreBundle\Entity\User_type();

        $informationStatue = $manager->getRepository('DlCommunityCoreBundle:Information_status')
                ->findOneBystatusType('Other');

        $formulaireInfo = $this->createForm(InformationType::class, $information, array('info_statu' => $informationStatue));
        $formUser_type = $this->createForm(\DlCommunity\CoreBundle\Form\User_typeType::class,$userType);

        if ($request->isMethod('POST')) {

            $formulaireInfo->handleRequest($request);

            if ($formulaireInfo->isValid()) {

                $is_in_base = $manager->getRepository('DlCommunityCoreBundle:Information')->isINinformation($information);
                
                //$manager->persist($information);
                // print_r($information);
                // print_r($information->getInformationStatus());
                //$manager->flush();

                return new \Symfony\Component\HttpFoundation\Response("c'est bien enregister");
            }
        }


        return $this->render('@DlCommunityConectionInscription/Default/inscription_form.html.twig', array(
            'form_Info_stat' => $formulaireInfo->createView(),'form_useType'=>$formUser_type->createView()));
    }

}
