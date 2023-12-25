<?php 
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Candidat;
use App\Entity\Annonce;

class ResultController extends AbstractController
{
     public function creatKeys($numberOfKeys,$city,$typedKeys,$codePostal)
     { 
      // annonce
     	if($codePostal =="annonce"){		
        	$arrayExecute =["city"=>"%".$city."%"];
     	}else{
       		$arrayExecute =["city"=>"%".$city."%","codePostal"=>"%".$codePostal."%"];
        }
        for ($i=1; $i <=$numberOfKeys  ; $i++) 
        { 
	      	$keys =$i."_key"; 
	      	$keys_value = "%".$typedKeys[$i-1]."%";
	       	$arrayExecute +=[$keys=>$keys_value];
       }
       return $arrayExecute;
     }
    /**
     * @Route("/candidat/find",   name="searchcandidat", methods ="post")
     */
	public function resultOfCandidat(Request $request)
	{
		//input variable is the keys words tha user will type later , it was converted into array 
		$input =$request->request->get('search_candidat');
		$input = preg_split("/[\s,]+/", $input);
		// the length of keys words typed by the user
		$city =$request->request->get('city_candidat');
		$input_len = count($input);
		//code postal 
		$codePostal = $request->request->get('codePostal_candidat');
		// creating keys
		$res = $this->creatKeys($input_len, $city,$input,$codePostal);

		$repository = $this->getDoctrine()
		->getRepository(Candidat::class)
		->findByTitleAndCity($input_len, $res);
		// make script if the candidat is not find

		return $this->render("App/component/resultCandidat.html.twig",["repository"=>$repository]);
	}

     /**
     * @Route("/search/annonce", name="searchAnnonce", methods="post")
     */
    public function searchAnnonce(Request $request){

		$input =$request->request->get('key');
		$input = preg_split("/[\s,]+/", $input);
		// the length of keys words typed by the user
		$city =$request->request->get('city');
		$input_len = count($input);
		// creating keys
		$res = $this->creatKeys($input_len, $city,$input,"annonce");
		$repository = $this->getDoctrine()
		->getRepository(Annonce::class)
 		->findByCityAndTitle($input_len, $res);
    	return $this->render("App/component/resultAnnonce.html.twig", ["annonce"=>$repository]);
    }
}
?>