<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController

{
    /**
     * @Route("/", name="home")
     */
    public function defaultAction()
    {

        return $this->render('base.html.twig',
            ['ceva' => 'Welcome to ceva!',
                'context' => 'ceva context'
            ]
        );

    }
}