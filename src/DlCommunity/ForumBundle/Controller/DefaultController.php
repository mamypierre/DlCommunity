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
            ->getRepository('DlCommunityCoreBundle:User_type');

        
        $listPseudo = $repository->findAll();
        
        print_r($listPseudo);

       /* foreach ($listPseudo as $pseudo) {

            echo $pseudo->getContent();

        }*/

        return $this->render('@DlCommunityForum/Default/index.html.twig',array('tet'=>'mitoooooooo'));
    }
}
