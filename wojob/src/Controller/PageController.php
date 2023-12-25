<?php 
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Annonce;
use App\Entity\Candidat;
use App\Repository\AnnonceRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\KernelInterface;
use  App\Entity\UserInformation;

class PageController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
	public function home(){
        
		return $this->render("App/page/home.html.twig");
	}
	/**
     * @Route("/make_video_studio", name="m_v_s")
     */
	public function studio_make_video(){
        
		return $this->render("App/page/studio_make_video.html.twig");
	}

	 /**
     * @Route("/studio_video", name="studioVideo")
     */
	public function studio_annonce(){
        
		return $this->render("App/page/studio_make_annonce.html.twig");
	}

    /**
	*@Route("/video", name="video")
	*/
	public function video(Request $request){
		//find all video 
		$repository = $this->getDoctrine()->getRepository(Candidat::class)
		->findAll();
		return $this->render("App/page/video.html.twig",["repository"=>$repository]);
	}
	
	/**
	 *@Route("/annonce", name="recruter")
	 */
	public function listJob(Request $request){
		// get the last seven annonce
		$lastAnnonce = $this->getDoctrine()
		->getRepository(Annonce::class)
		->findByExampleField();

		return $this->render("App/page/listjob.html.twig", [
			"annonce" => $lastAnnonce]);	
		}
	
	/**
	 *@Route("/infojob", name="infojob")
	 */
	public function infojob(Request $request, AnnonceRepository $annonceRepository){
		// this function get more information about the annonce job choose for the user ...


		$argUrl = $request->query->get("id");
        // convert to number
        $annonce = $annonceRepository->find($argUrl);
		return $this->render("App/page/infojob.html.twig",
			["annonce"=>$annonce]);
	}

	/**
	 *@Route("/session", name="session")
	 */
	public function killSession(Request $request){
		//init session 
		$session = $request->getSession();
		//get the session value
		$session_value = $session->get("email");
		//find arrow with the email on session ---- sql query 
		$entityManager = $this->getDoctrine()->getManager();
		$query = $entityManager->getRepository(UserInformation::class)
				->findOneBy([
					"email"=>$session_value,
				]);
	    $query->setIsActive(FALSE);
		$entityManager->flush();
        //close the session 
		$session->remove('email');
		 return $this->redirectToRoute('signin');
		}

		
	/**
	*@Route("/upload", name="upload",methods="post")
	*/
	public function uploadVideo(KernelInterface $kernel, Request $request){

		$session = $request->getSession();
		$url = $kernel->getProjectDir();

		if($session->get('email')){
			// the user is connect ...
			$codeStatus = $email =  $session->get('email');
			// set into database 
			if ( 0 < $_FILES['file']['error'] ) 
			{
          		$res = 'Error: ' . $_FILES['file']['error'] . '<br>';
        	}
       		else
        	{   
                // initilize all variable
        		$title = $request->request->get("title");
        		$tel = $request->request->get("tel");
        		$city = $request->request->get("city");
        		$cv = $request->request->get("cv");
        		$postal = $request->request->get("postal");
                // upload folder path 
          		$res = $url."\public\uploadCvideo\ ";
          		$path = $res. $_FILES['file']['name'];
          		move_uploaded_file($_FILES['file']['tmp_name'],$path);

                // remane file 
                $path_info = pathinfo($path);
                $extension_v = $path_info["extension"];

                rename($path,$res.$email.".".$extension_v);
                // set to database by doctrine manager 
          		$manager = $this->getDoctrine()->getManager();
        		$candidat = new Candidat();
        		$candidat->setTitle($title);
        		$candidat->setVideo($email.".".$extension_v);
        		$candidat->setTel($tel);
        		//$candidat->setCity($city);
        		$candidat->setPostal($postal);
        		$candidat->setCv("cv come here ");
        		$candidat->setEmail($email);
        		$manager->persist($candidat);
        		$manager->flush();

        	  $codeStatus = $res = "saved";

         	}

		}else{
			// the user is not connect 
			$codeStatus = -1;
		}
		return new JsonResponse($codeStatus);

	}

	/**
     * @Route("/find/recruter/candidat", name="tchat")
     */
	public function tchat(){
		$repository = $this->getDoctrine()->getRepository(UserInformation::class)
        ->findBy(
            ["isActive"=> 1]
        );
		return $this->render("App/page/tchat.html.twig",[ "user_infos"=>$repository]);
	}
}
