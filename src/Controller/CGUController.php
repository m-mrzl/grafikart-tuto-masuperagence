<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CGUController extends AbstractController
{
    /**
     * @Route("/cgu", name="cgu.index")
     */
    public function index(): Response
    {
        return $this->render('cgu/cgu.html.twig', [
            'controller_name' => 'CGUController',
        ]);
    }
}
