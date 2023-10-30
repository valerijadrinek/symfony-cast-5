<?php
namespace App\Controller;

use App\Entity\Question;
use Psr\Log\LoggerInterface;
use App\Service\MarkdownHelper;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\QuestionRepository;
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
     public function new(EntityManagerInterface $em)
    {
        $question = new Question();
        $question->setName('Disapearing skirt')
            ->setSlug('missing-skirt-'.rand(0, 1000))
            ->setQuestion(<<<EOF
                Hi! So... I'm having a *weird* day. Yesterday, I cast a spell
                to make my dishes wash themselves. But while I was casting it,
                I slipped a little and I think `I also hit my pants with the spell`.
                When I woke up this morning, I caught a quick glimpse of my pants
                opening the front door and walking out! I've been out all afternoon
                (with no pants mind you) searching for them.
                Does anyone have a spell to call your pants back?
EOF
            );
        if (rand(1, 10) > 2) {
            $question->setAskedAt(new \DateTime(sprintf('-%d days', rand(1, 100))));
        }
        $em->persist($question);
        $em->flush();
         return new Response(sprintf(
            'Well hallo! The shiny new question is id #%d, slug: %s',
            $question->getId(),
            $question->getSlug()
        ));
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show(Question $question) : Response {
    {
        
        $answers = [
            'Fill another jar! ',
            'Eat that jar... ',
            'Say spell backwards. '
        ];

        return $this->render('question/show.html.twig',
        ['question'=> $question,
         'answers' => $answers,
        ]
    
    );
    }

}
}