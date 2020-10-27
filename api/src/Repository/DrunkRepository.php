<?php

namespace App\Repository;

use App\Entity\Drunk;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Drunk|null find($id, $lockMode = null, $lockVersion = null)
 * @method Drunk|null findOneBy(array $criteria, array $orderBy = null)
 * @method Drunk[]    findAll()
 * @method Drunk[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrunkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Drunk::class);
    }

    // /**
    //  * @return Drunk[] Returns an array of Drunk objects
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
    public function findOneBySomeField($value): ?Drunk
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
