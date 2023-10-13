<?php

namespace App\Repository;

use App\Entity\VparHour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VparHour>
 *
 * @method VparHour|null find($id, $lockMode = null, $lockVersion = null)
 * @method VparHour|null findOneBy(array $criteria, array $orderBy = null)
 * @method VparHour[]    findAll()
 * @method VparHour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VparHourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VparHour::class);
    }

//    /**
//     * @return VparHour[] Returns an array of VparHour objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VparHour
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
