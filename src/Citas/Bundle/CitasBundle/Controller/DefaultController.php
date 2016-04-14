<?php

namespace Citas\Bundle\CitasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CitasBundle:Default:index.html.twig', array('name' => $name));
    }
}
