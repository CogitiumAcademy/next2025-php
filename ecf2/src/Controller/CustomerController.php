<?php

use App\Repository\OrderRepository;
use App\Controller\AbstractController;
use App\Repository\CustomerRepository;

class CustomerController extends AbstractController
{
    public function index()
    {
        $customerRepository = new CustomerRepository();
        $customers = $customerRepository->findAll();
        //dd($customers); 
        return $this->render('customer/index.html.twig', ['customers' => $customers]);
    }

    public function one()
    {
        $id = $_GET['id'];
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->findById($id);
        //dd($customer); 
        $orderRepository = new OrderRepository();
        $orders = $orderRepository->findByCustomer($id);
        //dd($orders);
        return $this->render('customer/one.html.twig', [
                'customer' => $customer,
                'orders' => $orders
            ]
        );
    }
}