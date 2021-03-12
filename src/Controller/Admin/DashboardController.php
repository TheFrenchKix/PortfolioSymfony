<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\ArticleCategorie;
use App\Entity\Competences;
use App\Entity\Profil;
use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('bundle/EasyAdminBundle/welcome.html.twig', [
            'user' => []
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Projets', 'fa fa-archive', Projet::class);
        yield MenuItem::linkToCrud('Competences', 'fa fa-graduation-cap', Competences::class);
        yield MenuItem::linkToCrud('Articles', 'fa fa-book', Article::class);
        yield MenuItem::linkToCrud('Categories', 'fa fa-archive', ArticleCategorie::class);
        yield MenuItem::linkToCrud('Profil', 'fa fa-archive', Profil::class);
    }
}
