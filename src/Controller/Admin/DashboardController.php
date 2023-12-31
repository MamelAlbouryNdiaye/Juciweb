<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Audit;
use App\Entity\Besoin;
use App\Entity\Document;
use App\Entity\Etude;
use App\Entity\Materiel;
use App\Entity\Recommandation;
use App\Entity\Structure;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Juciweb');
    }


    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setName($user->getUserIdentifier())
            ->setGravatarEmail($user->getUserIdentifier())
         //   ->setAvatarUrl('https://www.clipartmax.com/png/full/405-4050774_avatar-icon-flat-icon-shop-download-free-icons-for-avatar-icon-flat.png')
            ->displayUserAvatar(true);
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('build/css/admin.css');
    }




    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linkToCrud('Audit', 'fas fa-list', Audit::class);
        yield MenuItem::linkToCrud('Besoin', 'fas fa-list', Besoin::class);
        yield MenuItem::linkToCrud('Document', 'fas fa-list', Document::class);
        yield MenuItem::linkToCrud('Etude', 'fas fa-list', Etude::class);
        yield MenuItem::linkToCrud('Materiel', 'fas fa-list', Materiel::class);
        yield MenuItem::linkToCrud('Recommandation', 'fas fa-list', Recommandation::class);
        yield MenuItem::linkToCrud('Structure', 'fas fa-list', Structure::class);
        yield MenuItem::linkToCrud('User', 'fas fa-list', User::class);
    }
}
