<?php

namespace App\Controller\GraphQl;

use App\Entity\Product;
use App\Repository\ProductRepository;
use TheCodingMachine\GraphQLite\Annotations\Query;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    public function __construct(private ProductRepository $productRepository)
    {}


    /**
     * @Query()
     * @return Product[]
     */
    public function getProductsList(): array
    {
        $products = $this->productRepository->findAll();
        return $products;


        // Graphlq query:
        /*
        {
            productsList {
              name
              price
              category {
                id
                name
              }
            }
          }
          */
    }


}
