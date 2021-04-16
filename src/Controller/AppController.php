<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Script\SessionAndCookies;

class AppController extends  AbstractController
{   
	 /**
    * @Route("/test")
    */
    public function number(SessionAndCookies $userScript)
    {
     $userScript->setSession();
     
    }
}

