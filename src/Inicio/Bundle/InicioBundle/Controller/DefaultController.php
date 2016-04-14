<?php

namespace Inicio\Bundle\InicioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InicioBundle:Default:index.html.twig', array('name' => $name));
    }
}
