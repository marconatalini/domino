<?php

namespace App\Repository;

use App\Entity\RigaOrdine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RigaOrdine|null find($id, $lockMode = null, $lockVersion = null)
 * @method RigaOrdine|null findOneBy(array $criteria, array $orderBy = null)
 * @method RigaOrdine[]    findAll()
 * @method RigaOrdine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RigaOrdineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RigaOrdine::class);
    }

    // /**
    //  * @return RigaOrdine[] Returns an array of RigaOrdine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RigaOrdine
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
