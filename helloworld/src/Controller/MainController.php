<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends  AbstractController
    {
        /**
         * @Route("/")
         */
        public function home(){
            return $this->render('main/home.html.twig'); // On nome le fichier twig comme la fonction
        }
    }
