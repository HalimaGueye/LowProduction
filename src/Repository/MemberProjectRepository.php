<?php

namespace App\Repository;

use App\Entity\MemberProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MemberProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberProject[]    findAll()
 * @method MemberProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemberProject::class);
    }

    // /**
    //  * @return MemberProject[] Returns an array of MemberProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MemberProject
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
