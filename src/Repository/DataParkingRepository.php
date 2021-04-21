<?php

namespace App\Repository;

use App\Entity\DataParking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DataParking|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataParking|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataParking[]    findAll()
 * @method DataParking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataParkingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataParking::class);
    }

    // /**
    //  * @return DataParking[] Returns an array of DataParking objects
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
    public function findOneBySomeField($value): ?DataParking
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
