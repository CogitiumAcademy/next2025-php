<?php

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function home()
    {
        //echo 'Home';
        return new Response('Page home');
    }

    public function contact()
    {
        //echo 'Contact';
        return new Response('Page contact');
    }
}