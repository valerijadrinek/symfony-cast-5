<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'question_')]
class QuestionController extends AbstractController {

    #[Route('/', name: 'list')]
    public function homepage() : Response {
        return new Response('Hi there!');
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show($slug): Response
    {
        return new Response(sprintf('Future page to show the "%s" question!', ucwords(str_replace('-', ' ', $slug ) )));
    }

}