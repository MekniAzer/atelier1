<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;



class testcontroller extends AbstractController{


    #[Route('afficher/fr/{name}', name: 'test_fr')]
    function afficher($name){
        dd( "<h1> bonjour tout le monde $name </h1>");
        
    }

    #[Route('afficher/en', name: 'test_en')]

    function show(){
        return new Response("<h1> hello world </h1>");
    }

    #[Route('afficher/ar/{nom}', name: 'test_ar')]
    function tfarej($nom){
        return $this->render("test/tfarej.html.twig",['nom'=>$nom]);
    }


}



?>