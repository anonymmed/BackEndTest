<?php

namespace App\Repository;

use App\Entity\BroadBandProviders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BroadBandProviders|null find($id, $lockMode = null, $lockVersion = null)
 * @method BroadBandProviders|null findOneBy(array $criteria, array $orderBy = null)
 * @method BroadBandProviders[]    findAll()
 * @method BroadBandProviders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BroadBandProvidersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BroadBandProviders::class);
    }

    // /**
    //  * @return BroadBandProviders[] Returns an array of BroadBandProviders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BroadBandProviders
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
