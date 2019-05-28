<?php

namespace App\Repository;

use App\Entity\Impostazione;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Impostazione|null find($id, $lockMode = null, $lockVersion = null)
 * @method Impostazione|null findOneBy(array $criteria, array $orderBy = null)
 * @method Impostazione[]    findAll()
 * @method Impostazione[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpostazioneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Impostazione::class);
    }

    // /**
    //  * @return Impostazione[] Returns an array of Impostazione objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Impostazione
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
