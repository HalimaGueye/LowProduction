<?php

namespace App\Repository;

use App\Entity\NewActivity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewActivity|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewActivity|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewActivity[]    findAll()
 * @method NewActivity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewActivity::class);
    }

    // /**
    //  * @return NewActivity[] Returns an array of NewActivity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

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
