<?php

namespace DlCommunity\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Category');

        
        $listCategory = $repository->findAll();



        return $this->render('@DlCommunityForum/Default/index.html.twig',array('categ'=>$listCategory));
    }

    public function sujetAction() {

        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Subject');

    
    $listSubject = $repository->findAll();

    return $this->render('@DlCommunityForum/Default/Sujet.html.twig',array('SUB'=>$listSubject));


    }

    public function messageAction() {

        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Forum_message');

    
    $listForum_message = $repository->findAll();

    return $this->render('@DlCommunityForum/Default/Message.html.twig',array('Mess'=>$listForum_message));


    }


}


