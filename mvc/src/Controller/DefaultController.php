<?php

use App\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function home()
    {
        //echo 'Home';
        //return new Response('Page home');
        return $this->render('default/home.html.twig');
    }

    public function contact()
    {
        //echo 'Contact';
        //return new Response('Page contact');
        return $this->render('default/contact.html.twig');
    }
}