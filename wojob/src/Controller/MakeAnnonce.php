<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Script\MakeAnnonceScript;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class MakeAnnonce extends AbstractController
{
    /**
     * @Route("/annonce/make", name="makeannone")
     */
	public function userMakeAnnonce(MakeAnnonceScript $makeAnnonce,Request $request){
          $res = null;
          // code postal , adress , mois
		  $indefient = $request->request->get("entreprise");
		  $title = $request->request->get("title");
		  $contrat=  $request->request->get("contrat");
		  $tel =  $request->request->get("tel"); 
		  $salaire =  $request->request->get("salaire");
		  $mission =$request->request->get("mission"); 
		  $profil =  $request->request->get("profil"); 
		  $city = $request->request->get("city");
          $codePostal = $request->request->get("codePostal");
		  $adress = $request->request->get("adress");
		  $mois = $request->request->get("mois");
          // session 
          $session = $request->getSession();
          $sessionValue  =$session->get('email');
		  // check the variable are declared and if aren't empty

		  if(isset($title) && !empty($title) 
		  	   && isset($contrat) 
		  	   && !empty($contrat)
		  	   && isset($tel) 
		  	   && !empty($tel) 
		  	   && isset($salaire) 
		  	   && !empty($salaire) 
		  	   && isset($mission) 
		  	   && !empty($mission) 
		  	   && isset($profil) 
		  	   && !empty($profil) 
		  	   && isset($city) 
			   && !empty($city))
		  {
          $manArg = $this->getDoctrine();
		  $manager = $this->getDoctrine()->getManager();
          $res = $makeAnnonce->CreateAnnonce($sessionValue, $manager, $indefient,$title,$contrat, $tel, $salaire, $mission, $profil, $city, $codePostal,$adress,$mois,$manArg);
              
		  }else{
             $res ="* Remplissez tout les champs * ";
		  }
		  

		  return new Response($res);
	}

}