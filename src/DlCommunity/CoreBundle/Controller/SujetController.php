<?php

namespace DlCommunity\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SujetController extends Controller
{
    public function indexAction($id)
    {
       $subjets = $this->getDoctrine()->getManager()->getRepository('DlCommunityCoreBundle:Subject')->find($id)  ;
            
       
        
        return $this->render('@DlCommunityCore/template/Subjet.html.twig',['subjets'=>$subjets]);
    }
}
