<?php

namespace App\Repository;

use App\Entity\VparVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VparVehicle>
 *
 * @method VparVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method VparVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method VparVehicle[]    findAll()
 * @method VparVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VparVehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VparVehicle::class);
    }

//    /**
//     * @return VparVehicle[] Returns an array of VparVehicle objects
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

//    public function findOneBySomeField($value): ?VparVehicle
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
