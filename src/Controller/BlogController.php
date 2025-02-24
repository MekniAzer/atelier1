<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }
    #[Route('/blog/articles/{id}', name: 'blog_articles_show', requirements: ['id' => '\d+'], defaults: ['id' => 1])] //requirements donne une contrainte: il faut que l id soit \d: entier +: il peut etre plusieurs chiffre , id=>1 signifie que l id vas etre par defaut egale a 1
    public function show($id): Response //l id vas etre 1 par defaut 1er methode $id=1 du parametre
    {
        return $this->render('blog/show.html.twig', ['id' => $id]);
    }
    #[Route('/blog/articles/lister', name: 'blog_articles_lister')]
    public function lister(): Response
    {
        return $this->render('blog/lister.html.twig');
    }

    #[Route('/blog/articles/detail/{id<[0-9] {3,4}>}/{name<[a-zA-Z0-9]+>}', name: 'blog_articles_detail', requirements: ['id' => '\d+'], defaults: ['id' => 1])] //requirements donne une contrainte: il faut que l id soit \d: entier +: il peut etre plusieurs chiffre , id=>1 signifie que l id vas etre par defaut egale a 1
    public function detail($id, $name): Response //l id vas etre 1 par defaut 1er methode $id=1 du parametre
    {
        return $this->render('blog/detail.html.twig', ['id' => $id, 'name' => $name]);
    }

    #[Route('/blog/home', name: 'blog_home')] //requirements donne une contrainte: il faut que l id soit \d: entier +: il peut etre plusieurs chiffre , id=>1 signifie que l id vas etre par defaut egale a 1
    public function home(): Response //l id vas etre 1 par defaut 1er methode $id=1 du parametre
    {
        return $this->render(view: 'blog/home.html.twig');
    }
}
