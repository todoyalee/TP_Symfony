<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MightguyController extends AbstractController
{
    #[Route('/mightguy', name: 'app_mightguy')]
    public function index(): Response
    {
        /*
        $article =[
            [
                'title' => 'berlin is waiting daly' ,
                'motto' => 'hard work always pays off'
            ],
            [
                'title' => 'berlin is waiting daly' ,
                'motto' => 'hard work always pays off'
            ],
            [
                'title' => 'berlin is waiting daly' ,
                'motto' => 'hard work always pays off'
            ],
            [
                'title' => 'berlin is waiting daly' ,
                'motto' => 'hard work always pays off'
            ]
            ]
            */
        $heroes=["mightguy","midorya","songoku"];

        return $this->render('mightguy/index.html.twig',array(
            'heroes' =>$heroes
        )
            
        );
    }
}
