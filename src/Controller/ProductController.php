<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TheCodingMachine\GraphQLite\Annotations\Query;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    #[Query]
    public function getProducts(string $all): string
    {

        $all = 'products list';
        return $all;


        // return $this->render('product/index.html.twig', [
        //     'controller_name' => 'ProductController',
        // ]);
    }


}
