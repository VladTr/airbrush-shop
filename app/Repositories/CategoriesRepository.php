<?php

namespace Shop\Repositories;

use Shop\Category;

class CategoriesRepository extends Repository
{
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
}