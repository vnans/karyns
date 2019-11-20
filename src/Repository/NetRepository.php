<?php

namespace App\Repository;

use App\Entity\Net;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Net|null find($id, $lockMode = null, $lockVersion = null)
 * @method Net|null findOneBy(array $criteria, array $orderBy = null)
 * @method Net[]    findAll()
 * @method Net[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Net::class);
    }

    // /**
    //  * @return Net[] Returns an array of Net objects
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
    public function findOneBySomeField($value): ?Net
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
