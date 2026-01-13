<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrangeController extends AbstractController
{
    #[Route('/orange', name: 'app_orange')]
    public function index(): Response
    {
        return $this->render('orange/index.html.twig', [
            'controller_name' => 'OrangeController',
        ]);
    }
}
