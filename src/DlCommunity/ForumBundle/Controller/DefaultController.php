<?php

namespace DlCommunity\ForumBundle\Controller;

use DlCommunity\CoreBundle\Entity\Subject;
use DlCommunity\CoreBundle\Form\SubjectType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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

    public function sujetAction(Request $request) {

        $repository = $this
            ->getDoctrine()
            ->getManager() 
            ->getRepository('DlCommunityCoreBundle:Subject');

    
    $listSubject = $repository->findAll();



        $sujet= new Subject();

        $form = $this -> createform(SubjectType::class, $sujet);

        $form->handleRequest($request);

         if($form->isSubmitted())
         {

             $em=$this->getDoctrine()->getManager();

             $em->persist($sujet);

             $em->flush();

             return new Response('Sujet Crée');

         }

        $formview = $form->createView();

    return $this->render('@DlCommunityForum/Default/Sujet.html.twig',array('SUB'=>$listSubject, 'form'=>$formview));


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


