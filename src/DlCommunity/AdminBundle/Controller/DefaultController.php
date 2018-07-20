<?php

namespace DlCommunity\AdminBundle\Controller;

use DlCommunity\CoreBundle\Entity\News;
use DlCommunity\CoreBundle\Entity\User;
use DlCommunity\CoreBundle\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $news = new News();
        //on recupere le formulaire
        $form = $this->createForm(NewsType::class,$news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            // on enregistre en bdd
            $em= $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return new Response('News ajouté !');
        }
        // on genere le HTML du formulaire crée
        $formViews = $form->createView();
        // on rend la vue
        return $this->render('@DlCommunityAdmin/Default/index.html.twig',array('form'=>$formViews));
    }

    public function delete(User $user){
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return new Response( ('Utilisateur supprimé!'));

    }

}
