<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewAdminController extends AbstractController
{
    #[Route('/symfonyadmin', name: 'app_view_admin')]
    public function index(): Response
    {
        return $this->render('view_admin/index.html.twig', [
            'controller_name' => 'ViewAdminController',
        ]);
    }
}
