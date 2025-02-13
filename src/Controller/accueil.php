<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class accueil extends AbstractController {

    #[Route("/accueil", name: "accueil")]
    public function accueilController() {

        return $this->render("accueil.html.twig");
        
    }
}

?>