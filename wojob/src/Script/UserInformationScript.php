<?php 
namespace App\Script;
use App\Entity\UserInformation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserInformationScript {
	public function emailChekor($doc, $emailFromInput){
     // check if the email already exist 
		$email = $emailFromInput;
		$email = htmlentities(strtolower($email));
	    $data =  $doc->getRepository(UserInformation::class)
	    ->findOneBy(['email'=>$email]);
	    $res = null;
	    if(!$data){
	        $res = -1;
	    }else{
	    	$res = 1;
	    }
     	return $res;
	}

	public function setNewUser($setUser, $email, $password){
	     /** create new user **/

		 $isEmpty = $this->emailChekor($setUser, $email);
		 $res = null;
	     if($isEmpty == -1){
	      // set new email if the it doesn't exist
	      $email = htmlspecialchars($email);
	      $password = htmlspecialchars($password);
	      $manager = $setUser->getManager();
	      $tableFromDatabase = new UserInformation();
          $tableFromDatabase->setEmail($email);
          $tableFromDatabase->setPasswordEmail($password);
		  $tableFromDatabase->setIsActive(TRUE);
          // persit into database
          $manager->persist($tableFromDatabase);
          // execute the script
          $manager->flush();
          $res = "redirect";
          //redirect the page to home page;
	 
	     }else{
	      $res =" * This email already exist *";
	     }	     
      	 return $res;
	}
}
?>