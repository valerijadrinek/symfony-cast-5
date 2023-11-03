<?php

namespace App\Repository;

use App\Entity\HumaniodEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HumaniodEntity>
 *
 * @method HumaniodEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method HumaniodEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method HumaniodEntity[]    findAll()
 * @method HumaniodEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HumaniodEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HumaniodEntity::class);
    }

//    /**
//     * @return HumaniodEntity[] Returns an array of HumaniodEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HumaniodEntity
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
