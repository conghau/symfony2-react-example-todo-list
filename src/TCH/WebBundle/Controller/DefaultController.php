<?php

namespace TCH\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TCHWebBundle:Default:index.html.twig');
    }
}
