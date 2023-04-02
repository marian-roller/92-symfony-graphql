<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TheCodingMachine\GraphQLite\Annotations\Query;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    public function __construct(private ProductRepository $productRepository)
    {
        
    }



    // #[Route('/product', name: 'app_product')]
    // #[Query]
    // public function getProducts(): Response
    // {
    //     // dd('test');

    //     // $all = 'products list';
    //     // return $all;

    //     $products = $this->productRepository->findAll();
    //     // $products = $this->productRepository->findBy(['name' => "Runners gel"]);

    //     dd($products);

    //     return $this->render('product/index.html.twig', [
    //         'products' => $products,
    //     ]);
    // }

    // #[Route('/products', name: 'app_products')]
    // #[Query]

    /**
     * @Query()
     * @return Product[]
     */
    public function getProductsList(?string $search): array
    {
       
        // $products = $this->productRepository->findAll();
        $products = $this->productRepository->findBy(['name' => $search]);

        return $products;

        // return $this->render('product/index.html.twig', [
        //     'products' => $products,
        // ]);
    }


}
