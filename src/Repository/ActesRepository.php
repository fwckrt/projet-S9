<?php

namespace App\Repository;

use App\Entity\Actes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Actes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actes[]    findAll()
 * @method Actes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actes::class);
    }

    // /**
    //  * @return Actes[] Returns an array of Actes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Actes
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
