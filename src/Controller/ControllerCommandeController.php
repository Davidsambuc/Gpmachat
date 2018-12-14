<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerCommandeController extends AbstractController
{
    /**
     * @Route("/controller/commande", name="controller_commande")
     */
    public function index()
    {
        return $this->render('controller_commande/index.html.twig', [
            'controller_name' => 'ControllerCommandeController',
        ]);
    }
}
