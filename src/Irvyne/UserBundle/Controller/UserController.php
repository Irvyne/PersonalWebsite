<?php

namespace Irvyne\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IrvyneUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
