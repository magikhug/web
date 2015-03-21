<?php

namespace PROD\ProductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PRODProductionBundle:Default:index.html.twig', array('name' => $name));
    }
}
