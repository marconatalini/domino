<?php

namespace App\Repository;

use App\Entity\Pagamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pagamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pagamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pagamento[]    findAll()
 * @method Pagamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagamentoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pagamento::class);
    }

    // /**
    //  * @return Pagamento[] Returns an array of Pagamento objects
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
    public function findOneBySomeField($value): ?Pagamento
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
