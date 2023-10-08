<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Dalygoal3YController extends AbstractController
{
    #[Route('/goal/y', name: 'app_dalygoal3_y')]
    public function index(): Response
    {
        return $this->render('dalygoal3_y/index.html.twig', [
            'goal' => 'I  will become a great software engineer in berlin or stockholmd that will make his parents so proud and happy',
        ]);
    }
}
