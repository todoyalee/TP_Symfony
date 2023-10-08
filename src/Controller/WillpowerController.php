<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WillpowerController extends AbstractController
{
    #[Route('/willpower', name: 'app_willpower')]
    public function index(): Response
    {
        $heroes=["songoku","mightguy","midorya"] ;
        return $this->render('willpower/index.html.twig',
        array(
            'heroes' =>$heroes

        )
        );
    }
}
