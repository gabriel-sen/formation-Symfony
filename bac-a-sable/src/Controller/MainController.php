<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends  AbstractController // On nome le fichier twig comme la fonction
    {
        /**
         * @Route("/")
         */
        public function home(){
            $username = "gabriel" ;
            return $this->render('main/home.html.twig', [ // créer un tableau asso
                "username" => $username,
                "hello" => "bonjour"
            ]);
        }
    }
