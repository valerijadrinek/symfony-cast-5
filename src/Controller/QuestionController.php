<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_question_')]
class QuestionController extends AbstractController {

    #[Route('/', name: 'list')]
    public function homepage() : Response {
        return new Response('Hi there!');
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show($slug): Response
    {
        $answers = [
            'Fill another jar',
            'Eat that jar',
            'Say spell backwards'
        ];
        return $this->render('question/show.html.twig',
        ['question'=> ucwords(str_replace('-', ' ', $slug)),
         'answers' => $answers,
        ]
    
    );
    }

}