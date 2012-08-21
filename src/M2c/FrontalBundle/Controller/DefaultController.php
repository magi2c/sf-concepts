<?php

namespace M2c\FrontalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FrontalBundle:Default:index.html.twig', array('name' => $name));
    }
}
