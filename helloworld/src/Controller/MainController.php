<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends  AbstractController
    {
        /**
         * @Route("/test")
         */
        public function home(){
            die("hello world");
        }
    }
