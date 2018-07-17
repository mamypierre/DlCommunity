<?php

namespace DlCommunity\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@DlCommunityAdmin/Default/index.html.twig');
    }
}
