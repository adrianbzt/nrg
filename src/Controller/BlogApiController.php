<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{

    /**
     * @Route("/api/posts/{id}", methods={"GET", "HEAD"})
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {

        return $this->json([$id, 'show'], 200, [], []);

    }

    /**
     * @Route("/api/posts/{id}", methods={"PUT"})
     * @param int $id
     * @return JsonResponse
     */
    public function edit(int $id)
    {

        return $this->json([$id, 'edit'], 401, [], []);

    }


}