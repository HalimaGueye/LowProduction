<?php

namespace App\Repository;

use App\Entity\RoleProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RoleProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleProject[]    findAll()
 * @method RoleProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleProject::class);
    }

    // /**
    //  * @return RoleProject[] Returns an array of RoleProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoleProject
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
