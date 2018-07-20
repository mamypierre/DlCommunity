<?php

namespace DlCommunity\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class categorySoucateController extends Controller
{
    public function indexAction()
    {
       $gategorys = $this->getDoctrine()->getManager()->getRepository('DlCommunityCoreBundle:Category')->findAll()  ;
            
       
        
        return $this->render('@DlCommunityCore/template/categorySoucad.html.twig',['gategorys'=>$gategorys]);
    }
}
