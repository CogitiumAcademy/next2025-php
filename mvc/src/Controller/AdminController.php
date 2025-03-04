<?php

use Symfony\Component\HttpFoundation\Response;

class AdminController
{
    public function dashboard()
    {
        //echo 'Dashboard';
        return new Response('Page dashboard');
    }

    public function user()
    {
        //echo 'Gestion user';
        return new Response('Page gestion users');
    }
}