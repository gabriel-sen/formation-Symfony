<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class ContactController extends  AbstractController
    {
        /**
         * @Route("/contact")
         */
        public function home(){
            return $this->render('main/contact.html.twig');
        }
    }
