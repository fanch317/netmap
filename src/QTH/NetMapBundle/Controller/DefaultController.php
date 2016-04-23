<?php

namespace QTH\NetMapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NetMapBundle:Default:index.html.twig');
    }
}
