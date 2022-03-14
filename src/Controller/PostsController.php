<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostsController extends AbstractController
{
    /**
     */
    public function index()
    {
        $blogs = '';

        return $this->render('blogs/index.html.twig', [
            'blogs' => $blogs
        ]);
    }

    public function show(int $id)
    {
        $blog = '';

        return $this->render('blogs/view.html.twig', [
            'blog' => $blog,
            'id' => $id
        ]);
    }
}