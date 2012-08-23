<?php

namespace M2c\FrontalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function portadaAction()
    {
        $peticion = $this->getRequest();
        

        return $this->render('FrontalBundle:Default:portal.html.twig', array(
            'entities'      => array(),
            'form_filter'   => array()
        ));
    }
}
