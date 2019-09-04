<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     * @return Response
     * @throws \Exception
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig',
            [
                'number' => $number
            ]);
    }
}
