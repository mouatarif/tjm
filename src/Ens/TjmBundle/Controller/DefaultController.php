<?php

namespace Ens\TjmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EnsTjmBundle:Default:index.html.twig', array('name' => $name));
    }
}
