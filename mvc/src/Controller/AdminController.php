<?php

use App\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    public function dashboard()
    {
        //echo 'Dashboard';
        //return new Response('Page dashboard');
        return $this->render('admin/dashboard.html.twig');
    }

    public function user()
    {
        //echo 'Gestion user';
        //return new Response('Page gestion users');
        return $this->render('admin/user.html.twig');
    }
}