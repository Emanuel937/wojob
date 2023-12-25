<?php 
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Script\UserInformationScript;
use Symfony\Component\HttpFoundation\Request;
use App\Script\ConnectionScript;
use App\Entity\UserInformation;


class SingController extends AbstractController
{    
    /**
     * @Route("/signin", name="signin")
     */
	public function sinIn(Request $request,ConnectionScript $connectionScript){
		// search user's email and passord for connection
		
        if($request->isMethod("post")){
          $doctrine = $this->getDoctrine();
        // email and password
          $searchEmail = $request->request->get("email");
          $searchEmail = htmlspecialchars($searchEmail);
          $searchPassword = $request->request->get("password");
          $searchPassword = htmlspecialchars($searchPassword);

          $res = $connectionScript->dataChekor($doctrine,$searchEmail, $searchPassword);
          if($res =="redirect"){
            // session
            $session  = $request->getSession();
            $session->set("email",$searchEmail);
            //find the current session 
            //show that user is online
            $entityManager = $this->getDoctrine()->getManager();
            $find = $entityManager->getRepository(UserInformation::class)
            ->findOneBy([
              "email"=>$session->get("email")
            ]);
            $find->setIsActive(True);
            //send to database 
            $entityManager->flush();
            //go to home page 
          	return $this->redirectToRoute("home");
          }
        }else{
        	$res = null;
        }
		return $this->render("App/signInUp/signin.html.twig", [
	"status" => $res]);
	}

    /**
     * @Route("/signup", name="signup")
     */
	public function sinUp(Request $request, UserInformationScript $userScript){
         
         if($request->isMethod("post")){
           
         	 $email = $request->request->get("email");
		       $password = $request->request->get("password");
         
		      $doctrine = $this->getDoctrine();
		      $res = $userScript->setNewUser($doctrine, $email, $password);
		     //redirect to home if the data was save
		     if($res == "redirect"){
		     	// session 
               $session  = $request->getSession();
               $session->set("email",$email);
		       return $this->redirectToRoute("home");
		     }
         }else{
         	$res = null;
         }

		return $this->render("App/signInUp/signup.html.twig", ["status" => $res]);
	}
}
