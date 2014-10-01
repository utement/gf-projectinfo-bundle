<?php

namespace utement\GFProjectInfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GFProjectInfoBundle:Default:index.html.twig', array('name' => $name));
    }
}
