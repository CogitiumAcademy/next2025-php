<?php

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function register()
    {
        //echo 'Register';
        return new Response('Page register');
    }

    public function login()
    {
        //echo 'Login';
        return new Response('Page login');
    }

    public function logout()
    {
        //echo 'Logout';
        return new Response('Page logout');
    }
}