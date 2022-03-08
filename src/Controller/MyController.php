<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'lol' => 'lol'
        ]);
    }

    public function login()
    {
        return $this->render('login.html.twig');
    }

    public function list()
    {
        return $this->render('list.html.twig');
    }

    public function about()
    {
        return $this->render('about.html.twig');
    }
}