<?php

namespace VPM\MS\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VPMMSUtilisateurBundle:Default:index.html.twig');
    }
}
