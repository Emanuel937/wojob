<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Chat;
use App\Entity\UserInformation;

class ChatController extends AbstractController
{
    #[Route('/chat', name: 'chat')]
    public function SendMsg(Request $request)
    {   
        function req_post($arg){
         global $request;
         return $request->request->get($arg);
        }
        //get corrent user id
        $session_start =  $request->getSession();
       
        //$session_value = $session_start->get('email');
        //find the user id using this email;
        $repository = $this->getDoctrine()->getRepository(UserInformation::class)
        ->findOneBy([
          "email"=>$session_start->get("email")  
        ]);
        
      
        $from_id  = intval($repository->getId());
        $to_id    = intval(req_post("to_id"));
        $msg_text = req_post("chat_text");

        $entityManager = $this->getDoctrine()->getManager();

        $chat = new Chat();
        $chat->setFromId($from_id);
        $chat->setToId($to_id);
        $chat->setMessageText($msg_text);
        $entityManager->persist($chat);
        $entityManager->flush();

        return new Response("======== *******  =======");
    }
}
