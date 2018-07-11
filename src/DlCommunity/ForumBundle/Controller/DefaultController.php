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
            ->getRepository('DlCommunityCoreBundle:Information_status');

        
        $listStatus_type = $repository->findAll();
        
        print_r($listStatus_type);

       /* foreach ($listPseudo as $pseudo) {

            echo $pseudo->getContent();

        }*/

        return $this->render('@DlCommunityForum/Default/index.html.twig',array('test'=>'Forum'));
    }
}
