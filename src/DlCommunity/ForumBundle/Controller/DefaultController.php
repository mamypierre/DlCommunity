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


        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Sub_Category');

    
    $listSub_Category = $repository->findAll();

    //print_r ($listCategory[0]->getId());

        return $this->render('@DlCommunityForum/Default/index.html.twig',array('categ'=>$listCategory, 'SBC'=>$listSub_Category));
    }

    public function subcatAction() {

        $repository = $this
        ->getDoctrine()
        ->getManager() 
        ->getRepository('DlCommunityCoreBundle:Sub_Category');


    $listSub_Category = $repository->findAll();

    return $this->render('@DlCommunityForum/Default/SubCategory.html.twig',array('SBC'=>$listSub_Category));


    }

    public function sujetAction() {

        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Subject');

    
    $listSubject = $repository->findAll();

    return $this->render('@DlCommunityForum/Default/Sujet.html.twig',array('SUB'=>$listSubject));


    }

}


