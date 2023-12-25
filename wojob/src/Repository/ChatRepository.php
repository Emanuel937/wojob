<?php

namespace App\Repository;

use App\Entity\Chat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chat[]    findAll()
 * @method Chat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chat::class);
    }
    public function findMessage($from_id_data, $to_id_data){
        $conn = $this->getEntityManager()->getConnection();
        //make sql query 
        $sql = " SELECT * FROM chat
                 WHERE  (from_id = :from_id_data AND  to_id  = :to_id_data)
                 OR     (to_id   = :to_id_data AND from_id = :from_id_data)
        ";
        //prepare query
        $prepare = $conn->prepare($sql);
        //execute query 
        $prepare->execute([
            'from_id_data'=>$from_id_data,
            'to_id_data'=>$to_id_data
        ]);
        //return object
        return $prepare->fetchAllAssociative();
    }

    // /**
    //  * @return Chat[] Returns an array of Chat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Chat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
