<?php

use App\Repository\OrderRepository;
use App\Controller\AbstractController;

class OrderController extends AbstractController
{
    public function index()
    {
        $orderRepository = new OrderRepository();
        $orders = $orderRepository->findAll();
        //dd($orders); 
        return $this->render('order/index.html.twig', ['orders' => $orders]);
    }
}