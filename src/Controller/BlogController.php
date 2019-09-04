<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    /**
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        return $this->render('blog/default.html.twig', [
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     * @param string $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(string $slug)
    {

        return $this->render('blog/show.html.twig', [
            'slug' => $slug
        ]);

    }

}