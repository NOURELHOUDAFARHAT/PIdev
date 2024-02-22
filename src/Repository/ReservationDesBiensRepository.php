<?php

namespace App\Repository;

use App\Entity\ReservationDesBiens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationDesBiens>
 *
 * @method ReservationDesBiens|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationDesBiens|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationDesBiens[]    findAll()
 * @method ReservationDesBiens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationDesBiensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationDesBiens::class);
    }

//    /**
//     * @return ReservationDesBiens[] Returns an array of ReservationDesBiens objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReservationDesBiens
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
