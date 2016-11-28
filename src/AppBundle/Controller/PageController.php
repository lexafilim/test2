<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
	/**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/base.html.twig');
    }
    /**
     * @Route("/about", name="about_list")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }
 	
        /**
     * @Route("/registration", name="registration")
     */
    public function registrAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/registration.html.twig');
    }
}
