<?php

namespace App\Repository;

use App\Entity\Preseverance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Preseverance>
 *
 * @method Preseverance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Preseverance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Preseverance[]    findAll()
 * @method Preseverance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreseveranceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Preseverance::class);
    }

//    /**
//     * @return Preseverance[] Returns an array of Preseverance objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Preseverance
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
