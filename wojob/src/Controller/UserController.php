<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class UserController extends AbstractController
{

    /**
     * @Route("/user", name="user")
     */
	public function user(){
         
		return $this->render("App/page/user.html.twig");
	}

}