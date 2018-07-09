<?php

namespace DlCommunity\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@DlCommunityForum/Default/index.html.twig');
    }
}
