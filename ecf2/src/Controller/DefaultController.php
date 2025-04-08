<?php

use App\Controller\AbstractController;
use App\Repository\DashboardRepository;

class DefaultController extends AbstractController
{
    public function index()
    {
        $dashboardRepository = new DashboardRepository();
        $countAll = $dashboardRepository->countAll();
        //dd($countAll);
        return $this->render('default/index.html.twig', [
            'countAll' => $countAll
        ]);
    }

}