<?php

namespace App\Repository;

use App\Entity\MemberArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MemberArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberArticle[]    findAll()
 * @method MemberArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemberArticle::class);
    }

    // /**
    //  * @return MemberArticle[] Returns an array of MemberArticle objects
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
    public function findOneBySomeField($value): ?MemberArticle
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
