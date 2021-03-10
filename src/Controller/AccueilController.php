<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\ArticleCategorie;
use App\Entity\Competences;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        $repoArticle = $this->getDoctrine()->getRepository(Article::class);
        $repoComp = $this->getDoctrine()->getRepository(Competences::class);
        $repoCateg = $this->getDoctrine()->getRepository(ArticleCategorie::class);

        $articles = $repoArticle->findAll();
        $competences = $repoComp->findAll();
        $categ = $repoCateg->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'articles'        => $articles,
            'competences'        => $competences,
            'categories'        => $categ
        ]);
    }
}
