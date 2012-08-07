<?php

namespace M2c\CaniolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CaniolBundle:Default:index.html.twig', array('name' => $name));
    }
}
