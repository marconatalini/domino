<?php

namespace App\Repository;

use App\Entity\TipoPagamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoPagamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoPagamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoPagamento[]    findAll()
 * @method TipoPagamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoPagamentoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoPagamento::class);
    }

    // /**
    //  * @return TipoPagamento[] Returns an array of TipoPagamento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoPagamento
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
