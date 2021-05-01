<?php
namespace App\Script;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Annonce;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MakeAnnonceScript {
   
    public function thisAnnonceExist($repository,$mission, $profil,$tel,$indefient){
       // call the repository function 
    	$data = $repository->getRepository(Annonce::class)
    	->findOneBy([
            "mission"=>$mission,
            "profil"=>$profil,
            "tel"=>$tel,
            "identifient"=>$indefient
    	]);

    	if($data){
           $res = "200";
    	}else{
    		$res = "404";
    	}
    	return $res;
    }
	public function CreateAnnonce($session, $arg,$indefient,$title,$contrat, $tel, $salaire, $mission, $profil, $city,
		$codePostal,$adress,$mois,$repository){
		//$session = $session->get('email');
        $res = null;
        // check if the annonce already exist
         $isFind = $this->thisAnnonceExist($repository,$mission,$profil,$tel,$indefient);
         if($isFind == "200"){
         	$res ="wojob200";
         }else{
         	// this annonce not exist yet...
         	if(!empty($session)){
         			$annonce = new Annonce();
			$annonce->setEmail($session);
			$annonce->setIdentifient($indefient);
			$annonce->setTitle($title);
			$annonce->setContrat($contrat);
			$annonce->setTel($tel);
			$annonce->setSalaire($salaire);
			$annonce->setMission($mission);
			$annonce->setProfil($profil);
			$annonce->setCity($city);
			$annonce->setCodePostal($codePostal);
			$annonce->setMois($mois);
			$arg->persist($annonce);
			$arg->flush();
			// find the use last post
			$repositoryData  = $repository->getRepository(Annonce::class)
	        ->lastUserAnnonce($session);
	         foreach ($repositoryData as $key) {
	         	# code...
	         	$res = $key->getId();
	         	}
	         }else{
	         	// the user is not connect
	         	$res = "wobojb-4";
	         }

	         }
        return $res;
	}
}