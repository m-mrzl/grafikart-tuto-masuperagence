<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/about", name="aboutus.index")
     */
    public function index(): Response
    {
        return $this->render('about_us/index.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
