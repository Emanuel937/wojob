<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Chat;
use App\Entity\UserInformation;



class ChatText extends AbstractController
{
    /**
     * @Route("/chat/text", name="texts", methods="post")
     */
    public function findText(Request $request)
    {   $to_id = $request->request->get("to_id");
        //start session
        $session       = $request->getSession();
        $session_value = $session->get("email");
        //get the corrent user id 
        $findId  = $this->getDoctrine()->getRepository(UserInformation::class);
        $user_id = $findId->findOneBy([
            "email"=>$session_value
        ]);
        //get from_id
        $from_id = $user_id->getId();
        //make query get the message .... 
        $entityManager = $this->getDoctrine()->getRepository(Chat::class);
        $resultOfQuery = $entityManager->findMessage($from_id, $to_id);
        //return 
        return $this->render("App/component/chat_text.html.twig",[
            "msg"=>$resultOfQuery,
             "corrent_user"=>$from_id
        ]);
    }
}
