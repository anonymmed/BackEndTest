<?php

namespace App\Repository;

use App\Entity\EnergyProviders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnergyProviders|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnergyProviders|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnergyProviders[]    findAll()
 * @method EnergyProviders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnergyProvidersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnergyProviders::class);
    }

    // /**
    //  * @return EnergyProviders[] Returns an array of EnergyProviders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnergyProviders
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
