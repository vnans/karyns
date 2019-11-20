<?php

namespace App\Repository;

use App\Entity\Decor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Decor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Decor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Decor[]    findAll()
 * @method Decor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Decor::class);
    }

    // /**
    //  * @return Decor[] Returns an array of Decor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Decor
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
