<?php

namespace App\Repository;

use App\Entity\NewActuality;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewActuality[]    findLastOnes($limit)
 * @method NewActuality[]    findAll()
 * @method NewActuality[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewActualityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewActuality::class);
    }

    /**
     * @return NewActuality[] Returns an array of $limit NewActuality objects
     */
    public function findLastOnes($limit)
    {
        return $this->createQueryBuilder('n')
            ->orderBy('n.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?NewActivity
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
