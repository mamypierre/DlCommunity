<?php

namespace DlCommunity\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       $res = $this->getDoctrine()->getManager()->getRepository('DlCommunityCoreBundle:User_type')->findAll()  ;
       
       //print_r($res);
       
        
        return $this->render('@DlCommunityCore/template/template.html.twig');
    }
}
