<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterController extends AbstractController
{
    /**
     * @Route("/newsletter", name="newsletter.index")
     */
    public function index(): Response
    {
        return $this->render('newsletter/newsletter.html.twig', [
            'controller_name' => 'NewsletterController',
        ]);
    }
}
