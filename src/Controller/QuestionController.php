<?php
namespace App\Controller;

use App\Entity\Question;
use Psr\Log\LoggerInterface;
use App\Service\MarkdownHelper;
use App\Repository\AnswerRepository;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



#[Route('/', name: 'app_question_')]
class QuestionController extends AbstractController {

    private $logger;
    private $isDebug;
    public function __construct(LoggerInterface $logger, bool $isDebug)
    {
        $this->logger = $logger;
        $this->isDebug = $isDebug;
    }

    #[Route('/', name: 'homepage')]
    public function homepage(QuestionRepository $questionRepository) : Response {
        
        $questions = $questionRepository->findAllAskedOrderedByNewest();

     
        
        return $this->render('question/homepage.html.twig',
           [
            'questions' => $questions,
           ]
    );
    }

    #[Route('/questions/new', name: 'new')]
     public function new() : Response
    {
       
        return new Response('Sounds like a GREAT feature for V2!');
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show(Question $question, AnswerRepository $answerRepository  ) : Response {
    {

        return $this->render('question/show.html.twig',
        ['question'=> $question,
        ]
    
    );
    }

    }

    #[Route('/questions/{slug}/vote', name: 'vote', methods:"POST")]
    public function vote( Question $question, Request $request, EntityManagerInterface $entityManager) : Response 
    {
        $direction = $request->request->get("direction");
        if ($direction === 'up') {
            $question->upVote();
        } elseif ($direction === 'down') {
            $question->downVote();
        }
        
        $entityManager->flush();

        return $this->redirectToRoute('app_question_show', [
            'slug' => $question->getSlug()
        ]);
    }
}