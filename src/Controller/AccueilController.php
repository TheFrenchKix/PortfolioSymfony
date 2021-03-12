<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\ArticleCategorie;
use App\Entity\Competences;
use App\Entity\Profil;
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
        $repoprofil = $this->getDoctrine()->getRepository(Profil::class);

        $articles = $repoArticle->findAll();
        $competences = $repoComp->findAll();
        $categ = $repoCateg->findAll();
        $profil = $repoprofil->find(1);

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'articles'        => $articles,
            'competences'        => $competences,
            'categories'        => $categ,
            'profil'        => $profil
        ]);
    }
}
