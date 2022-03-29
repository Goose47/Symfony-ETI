<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\Type\PostType;
use App\Repository\PostRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PostsController extends AbstractController
{
    /**
     */
    public function index(PostRepository $postRepository)
    {
        $posts = $postRepository->findAll();

        return $this->render('blogs/index.html.twig', [
            'posts' => $posts
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

    public function newPost(Request $request, ManagerRegistry $doctrine)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $post = $form->getData();

            $manager = $doctrine->getManager();
            $manager->persist($post);
            $manager->flush();
            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('posts.browse');
        }

        return $this->renderForm('blogs/new.html.twig', [
            'form' => $form,
        ]);
    }
}