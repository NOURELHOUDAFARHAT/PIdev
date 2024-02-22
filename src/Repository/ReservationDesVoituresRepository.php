<?php

namespace App\Repository;

use App\Entity\ReservationDesVoitures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationDesVoitures>
 *
 * @method ReservationDesVoitures|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationDesVoitures|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationDesVoitures[]    findAll()
 * @method ReservationDesVoitures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationDesVoituresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationDesVoitures::class);
    }

//    /**
//     * @return ReservationDesVoitures[] Returns an array of ReservationDesVoitures objects
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

//    public function findOneBySomeField($value): ?ReservationDesVoitures
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
