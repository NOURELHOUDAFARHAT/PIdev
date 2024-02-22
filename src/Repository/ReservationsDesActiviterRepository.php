<?php

namespace App\Repository;

use App\Entity\ReservationsDesActiviter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationsDesActiviter>
 *
 * @method ReservationsDesActiviter|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationsDesActiviter|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationsDesActiviter[]    findAll()
 * @method ReservationsDesActiviter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationsDesActiviterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationsDesActiviter::class);
    }

//    /**
//     * @return ReservationsDesActiviter[] Returns an array of ReservationsDesActiviter objects
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

//    public function findOneBySomeField($value): ?ReservationsDesActiviter
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
