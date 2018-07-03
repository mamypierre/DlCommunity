<?php

namespace DlCommunity\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@DlCommunityCore/template/template.html.twig');
    }
}
