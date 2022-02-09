<?php

namespace App\Repository;

use App\Entity\PortfolioType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PortfolioType|null find($id, $lockMode = null, $lockVersion = null)
 * @method PortfolioType|null findOneBy(array $criteria, array $orderBy = null)
 * @method PortfolioType[]    findAll()
 * @method PortfolioType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PortfolioTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PortfolioType::class);
    }

    // /**
    //  * @return PortfolioType[] Returns an array of PortfolioType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PortfolioType
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
