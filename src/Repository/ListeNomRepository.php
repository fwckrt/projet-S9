<?php

namespace App\Repository;

use App\Entity\ListeNom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ListeNom|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeNom|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeNom[]    findAll()
 * @method ListeNom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeNomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeNom::class);
    }

    // /**
    //  * @return ListeNom[] Returns an array of ListeNom objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeNom
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
