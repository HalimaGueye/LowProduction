<?php

namespace App\Repository;

use App\Entity\Supporters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Supporters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Supporters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Supporters[]    findAll()
 * @method Supporters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupportersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Supporters::class);
    }

    // /**
    //  * @return Supporters[] Returns an array of Supporters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /**
     * @return Supporters[] Returns an array of $limit Supporters objects
     */
    public function findAll()
    {
        return $this->createQueryBuilder('n')
          ->orderBy('n.id', 'DESC')
          ->getQuery()
          ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Supporters
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
