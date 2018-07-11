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
        
        //print_r($listStatus_type);

       /* foreach ($listPseudo as $pseudo) {

            echo $pseudo->getContent();

        }*/

        $repository = $this
        ->getDoctrine()
        ->getManager() 
        ->getRepository('DlCommunityCoreBundle:Sub_Category');

    
    $listSub_Category = $repository->findAll();

        return $this->render('@DlCommunityForum/Default/index.html.twig',array('test'=>$listCategory, 'SBC'=>$listSub_Category));
    }
}
