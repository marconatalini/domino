<?php

namespace App\Repository;

use App\Entity\Fornitore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fornitore|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fornitore|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fornitore[]    findAll()
 * @method Fornitore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FornitoreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fornitore::class);
    }

    // /**
    //  * @return Fornitore[] Returns an array of Fornitore objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fornitore
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
