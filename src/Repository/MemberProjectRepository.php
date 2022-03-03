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

    /**
     * @return MemberProject[] Returns an array of MemberProject objects
     */

    public function findByProjectId($id)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.project = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult()
        ;
    }

    public function test($id)
    {
        $sql = "
            SELECT r.name, GROUP_CONCAT(m.name SEPARATOR ', ')
              FROM project p, member_project mp, member m, project_member_role pmr, role_project r
              WHERE mp.project_id = p.id AND mp.member_id = m.id AND pmr.project_member_id = mp.id AND pmr.role_project_id = r.id
              AND p.id = :idp
            GROUP BY 1
            ";
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->bindValue("idp", $id);
        $stmt->execute();
        return $stmt->executeQuery()
        ->fetchAllNumeric();
    }

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
