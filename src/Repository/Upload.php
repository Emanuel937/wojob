<?php 
namespace App\Script;
use App\Entity\Candidat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

Class Upload {
	
	public function uploadVideo($file,$kernel){
		$url = $kernel->getProjectDir();
		if ( 0 < $file['error'] ) 
		{
          $res = 'Error: ' . $file['error'] . '<br>';
        }
       else
        {
          $url."\public\uploadCvideo\ ";
          $res ="done";
          move_uploaded_file($file['tmp_name'],$url.$file['name']);
         }
	}
}
?>