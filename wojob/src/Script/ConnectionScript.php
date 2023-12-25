<?php
namespace App\Script;
use App\Entity\UserInformation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ConnectionScript {
	public function dataChekor($repository, $email, $password){

		//$repository  = $this->getDoctrine()->getManager();
		$data = $repository->getRepository(UserInformation::class)
		->findOneBy(["email"=>$email,"passwordEmail"=>$password]);

      if(empty($data)){
      	$res = " * The email or the passoword is not correct *";
      }else{

      	$res ="redirect";
		// set online user 
      }
     return $res;
	}
}


?>