<?php

namespace Irvyne\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        return $this->render('IrvynePortfolioBundle:Default:index.html.twig', array('name' => 'portfolio'));
    }
}
