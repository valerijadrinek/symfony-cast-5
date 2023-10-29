<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use App\Service\MarkdownHelper;
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
    public function homepage() : Response {
        return $this->render('question/homepage.html.twig',
        []
    );
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show($slug,  MarkdownHelper $markdownHelper) : Response {
    {
        

        $answers = [
            'Fill another jar! ',
            'Eat that jar... ',
            'Say spell backwards. '
        ];

        $questionText = 'I\'ve spell another jar of **magic** jam. How can I get it back?';
        $parsedQuestionText = $markdownHelper->parse($questionText);

        
        
        return $this->render('question/show.html.twig',
        ['question'=> ucwords(str_replace('-', ' ', $slug)),
         'questionText' => $parsedQuestionText,
         'answers' => $answers,
        ]
    
    );
    }

}
}