<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route(
     *     "/contact",
     *     name="contact",
     *     condition="context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i' or '/chrome/i' or '/opera/i'"
     * )
     *
     * expressions can also include config parameters:
     * condition: "request.headers.get('User-Agent') matches '%app.allowed_browsers%'"
     */
    public function contact(Request $request)
    {

        return $this->render('base.html.twig', [
            'context' => $request->headers->get('User-Agent'),
            'ceva' => 'masina de spalat a lui Tanase'
        ]);
    }
}