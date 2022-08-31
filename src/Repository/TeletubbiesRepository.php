<?php

namespace App\Repository;

use App\Entity\Teletubbies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Teletubbies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teletubbies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teletubbies[]    findAll()
 * @method Teletubbies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeletubbiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teletubbies::class);
    }

    // /**
    //  * @return Teletubbies[] Returns an array of Teletubbies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Teletubbies
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
