<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController 
{
    #[Route(path:"/comments/{id<\d+>}/vote/{direction<up|down>}", name:"app_comment_vote", methods:"POST")]
    public function commentVote($id, $direction, LoggerInterface $logger) : JsonResponse
    {
        //query db

        if($direction === "up") 
        { 
            $logger->info("Voting up!");
            $currentVoteCount = rand(7,90);
        } else {
            $logger->info("Voting down!");
            $currentVoteCount = rand(0,6);
        }

        return new JsonResponse(['votes' => $currentVoteCount]);

    }

}