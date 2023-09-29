<?php

namespace App\Repository;

use App\Entity\VparService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VparService>
 *
 * @method VparService|null find($id, $lockMode = null, $lockVersion = null)
 * @method VparService|null findOneBy(array $criteria, array $orderBy = null)
 * @method VparService[]    findAll()
 * @method VparService[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VparServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VparService::class);
    }

//    /**
//     * @return VparService[] Returns an array of VparService objects
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

//    public function findOneBySomeField($value): ?VparService
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
