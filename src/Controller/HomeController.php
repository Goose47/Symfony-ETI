<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function __invoke()
    {
        $this->addFlash('welcomeFlash', 'Welcome on the site!');
        
        return $this->render('home.html.twig');
    }
}