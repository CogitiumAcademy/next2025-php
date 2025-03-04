<?php

use App\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function register()
    {
        //echo 'Register';
        //return new Response('Page register');
        return $this->render('user/register.html.twig');
    }

    public function login()
    {
        //echo 'Login';
        //return new Response('Page login');
        return $this->render('user/login.html.twig');
    }

    public function logout()
    {
        //echo 'Logout';
        //return new Response('Page logout');
        return $this->render('user/logout.html.twig');
    }
}