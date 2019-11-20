<?php

namespace App\Repository;

use App\Entity\Impr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Impr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Impr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Impr[]    findAll()
 * @method Impr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImprRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Impr::class);
    }

    // /**
    //  * @return Impr[] Returns an array of Impr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Impr
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
