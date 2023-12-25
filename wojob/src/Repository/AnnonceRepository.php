<?php
namespace App\Repository;
use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }
     
    
    public function findByExampleField()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(9)
            ->getQuery()
            ->getResult()
        ;
    }
    public function lastUserAnnonce($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.email = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }
    public function creatWhere( $numberOfKeys){
      // this function created where condition and the value will set automaticly
      $sql = "WHERE a.city Like :city ";
      for ($i=1; $i <= $numberOfKeys; $i++) { 
          # code...
          $sql.= "AND a.title LIKE :".$i."_key";
       
      }
      return $sql;
    }
    public function findByCityAndTitle($numberOfKeys,$arrayExecute){
            $conn = $this->getEntityManager()->getConnection();   
            $sql=  "SELECT * FROM annonce a ".
            //call the function to create where condition
                   $this->creatWhere($numberOfKeys).
                   " " ."ORDER BY a.id Desc";
          
            //execute the code 
            //this code is executed when listjob function is executed this one is located at PageController.php.
            $stmt = $conn->prepare($sql);  
            $stmt->execute($arrayExecute);
            // returns an array of arrays (i.e. a raw data set)
            return $stmt->fetchAllAssociative();
    }
    /*
    public function findOneBySomeField($value): ?Annonce
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
