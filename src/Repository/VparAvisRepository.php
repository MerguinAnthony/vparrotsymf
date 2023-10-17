<?php

namespace App\Repository;

use App\Entity\VparAvis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VparAvis>
 *
 * @method VparAvis|null find($id, $lockMode = null, $lockVersion = null)
 * @method VparAvis|null findOneBy(array $criteria, array $orderBy = null)
 * @method VparAvis[]    findAll()
 * @method VparAvis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VparAvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VparAvis::class);
    }

//    /**
//     * @return VparAvis[] Returns an array of VparAvis objects
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

//    public function findOneBySomeField($value): ?VparAvis
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
