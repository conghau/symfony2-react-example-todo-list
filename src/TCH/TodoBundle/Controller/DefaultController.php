<?php

namespace TCH\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TCHTodoBundle:Default:index.html.twig');
    }
}
