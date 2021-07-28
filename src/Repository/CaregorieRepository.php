<?php

namespace App\Repository;

use App\Entity\Caregorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Caregorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caregorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caregorie[]    findAll()
 * @method Caregorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaregorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caregorie::class);
    }

    // /**
    //  * @return Caregorie[] Returns an array of Caregorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Caregorie
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
