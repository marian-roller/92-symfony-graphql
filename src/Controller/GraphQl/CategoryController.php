<?php

namespace App\Controller\GraphQl;

use App\Entity\Product;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use TheCodingMachine\GraphQLite\Annotations\Query;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{

    public function __construct(private CategoryRepository $categoryRepository)
    {}


    /**
     * @Query()
     * @return Category[]
     */
    public function getCategories(): array
    {
        $categories = $this->categoryRepository->findAll();
        return $categories;

        // Graphlq query:
        /*
        {
            categories {
                name
            }
        }
        */
    }


    /**
     * @Query()
     * @return Category[]
     */
    public function getCategory(string $name): array
    {
        $category = $this->categoryRepository->findBy(['name' => $name]);
        return $category;
    }


}
