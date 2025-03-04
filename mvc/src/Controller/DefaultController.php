<?php

use App\Repository\PostRepository;
use App\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function home()
    {
        //echo 'Home';
        //return new Response('Page home');
        $postRepository = new PostRepository();
        $posts = $postRepository->findAll();
        return $this->render('default/home.html.twig', ['posts' => $posts]);
    }

    public function contact()
    {
        //echo 'Contact';
        //return new Response('Page contact');
        return $this->render('default/contact.html.twig');
    }
}