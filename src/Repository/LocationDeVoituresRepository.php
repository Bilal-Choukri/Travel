<?php

namespace App\Repository;

use App\Entity\LocationDeVoitures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LocationDeVoitures|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocationDeVoitures|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocationDeVoitures[]    findAll()
 * @method LocationDeVoitures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationDeVoituresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LocationDeVoitures::class);
    }

    // /**
    //  * @return LocationDeVoitures[] Returns an array of LocationDeVoitures objects
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
    public function findOneBySomeField($value): ?LocationDeVoitures
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
