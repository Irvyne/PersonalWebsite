<?php

namespace Irvyne\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction($name)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('no-reply@thibaud-bardin.com')
            ->setTo('thibaud.bardin@gmail.com')
            ->setBody(
                $this->renderView(
                    'IrvyneBlogBundle:Blog:index.html.twig',
                    array('name' => $name)
                )
            )
        ;

        //$this->get('mailer')->send($message);

        return $this->render('IrvyneBlogBundle:Blog:index.html.twig', array('name' => $name));
    }
}
