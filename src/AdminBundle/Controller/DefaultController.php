<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home",name="home_admin")
     */
    public function indexAction()
    {
        return $this->render('admin/home.html.twig');
    }
}
