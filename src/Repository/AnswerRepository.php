<?php

namespace App\Repository;

use App\Entity\Answer;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Answer>
 *
 * @method Answer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Answer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Answer[]    findAll()
 * @method Answer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Answer::class);
    }


    public static function createApprovedCriteria(): Criteria
    {
        return Criteria::create()
            ->andWhere(Criteria::expr()->eq('status', Answer::STATUS_APPROVED));
    }

    public function findMostPopular(string $search = null) : array
    {
        $queryBuilder =  $this->createQueryBuilder('answer')
            
            ->orderBy('answer.votes', 'DESC')
            ->innerJoin('answer.question', 'question')
            ->addSelect('question');
           
            if ($search) {
                $queryBuilder->andWhere('answer.content LIKE :searchTerm OR question.question LIKE :searchTerm')
                    ->setParameter('searchTerm', '%'.$search.'%');
            }
            return $queryBuilder
                ->setMaxResults(10)
                ->getQuery()
                ->getResult();
    }

//    /**
//     * @return Answer[] Returns an array of Answer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Answer
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
