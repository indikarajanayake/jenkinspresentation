<?php

namespace Vision\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VisionPresentationBundle:Default:index.html.twig', array('name' => $name));
    }
}
