<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

use App\Utils\WrapperTexte;

class PageController extends AbstractController{

     /**
     * @Route("/", methods={"GET"})
     */
    public function getPageController(){
     return $this->render('base.html.twig');
     $result = 0;
    }

     /**
     * @Route("/", methods={"POST"})
     */
    public function data(){
        $result = 0;
       }
}
