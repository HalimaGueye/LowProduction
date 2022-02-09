<?php

namespace App\Repository;

use App\Entity\ProjectPartner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProjectPartner|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectPartner|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectPartner[]    findAll()
 * @method ProjectPartner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectPartnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectPartner::class);
    }

    // /**
    //  * @return ProjectPartner[] Returns an array of ProjectPartner objects
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
    public function findOneBySomeField($value): ?ProjectPartner
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
