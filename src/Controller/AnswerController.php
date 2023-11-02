<?php
namespace App\Controller;

use App\Entity\Answer;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnswerController extends AbstractController 
{
    #[Route(path:"/answers/{id<\d+>}/vote/{direction<up|down>}", name:"answer_vote", methods:"POST")]
    public function answerVote(Answer $answer, LoggerInterface $logger, Request $request, EntityManagerInterface $entityManager) : Response
    {
        $data = json_decode($request->getContent(), true);
        $direction = $data['direction'] ?? 'up';
        // use real logic here to save this to the database
        if ($direction === 'up') {
            $logger->info('Voting up!');
            $answer->setVotes($answer->getVotes() + 1);
            $currentVoteCount = rand(7, 100);
        } else {
            $logger->info('Voting down!');
            $answer->setVotes($answer->getVotes() - 1);
        }
        $entityManager->flush();
        return $this->json(['votes' => $answer->getVotes()]);
    }
}