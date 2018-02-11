<?php

namespace EnseignantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home_enseignant")
     */
    public function indexAction()
    {
        return $this->render('enseignant/home.html.twig');
    }
}
