<?php

/*
 * This file is part of the Immobilio API application.
 */

namespace App\Repository;

use App\Entity\PatNatureEspace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PatNatureEspace|null find($id, $lockMode = null, $lockVersion = null)
 * @method PatNatureEspace|null findOneBy(array $criteria, array $orderBy = null)
 * @method PatNatureEspace[]    findAll()
 * @method PatNatureEspace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PatNatureEspaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PatNatureEspace::class);
    }

    // /**
    //  * @return PatNatureEspace[] Returns an array of PatNatureEspace objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PatNatureEspace
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}