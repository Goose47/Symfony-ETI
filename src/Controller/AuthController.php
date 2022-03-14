<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    public function showForm()
    {
        return $this->render('auth/loginForm.html.twig');
    }
}