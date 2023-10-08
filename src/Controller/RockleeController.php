<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RockleeController extends AbstractController
{
    #[Route('/rocklee', name: 'app_rocklee')]
    public function index(): Response
    {
        return $this->render('rocklee/index.html.twig', [
            'preseverance' => 'if there is a will , there will always be a way',
        ]);
    }
}
