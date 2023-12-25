<?php

namespace App\Repository;
use App\Entity\Candidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Candidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidat[]    findAll()
 * @method Candidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidat::class);
    }

      public function creatWhere( $numberOfKeys){
      // this function created where condition and the value will set automaticly
      $sql = "WHERE c.city Like :city ";

      for ($i=1; $i <= $numberOfKeys; $i++) { 
          # code...
          $sql.= "AND c.title LIKE :".$i."_key ";
      }
      $sql .= "AND c.code_postal Like :codePostal";
      
      return $sql;
    }
    public function findByTitleAndCity($numberOfKeys,$arrayExecute){
            $conn = $this->getEntityManager()->getConnection();

            $sql=  "SELECT * FROM candidat c ".
            //call the function to create where condition
                   $this->creatWhere($numberOfKeys).
                   " " ."ORDER BY c.id Desc";
          
            //execute the code 
            //this code is executed when listjob function is executed this one is located at PageController.php.
            $stmt = $conn->prepare($sql);  
            $stmt->execute($arrayExecute);
            // returns an array of arrays (i.e. a raw data set)
            return $stmt->fetchAllAssociative();
    }
}
