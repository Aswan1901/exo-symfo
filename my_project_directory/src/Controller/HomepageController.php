<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(ProductRepository $productRepository): Response
    {
        // var_dump($productRepository->findAll());
        $products = $productRepository->findAll();
      

        return $this->render('base.html.twig', [
            'controller_name' => 'HomepageController',
            'products' => $products

            
        ]);
    }
}
