<?php

namespace EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home",name="home_etudiant")
     */
    public function indexAction()
    {
        return $this->render('etudiant/home.html.twig');
    }
}
