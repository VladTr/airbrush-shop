<?php

namespace Shop\Repositories;

use Shop\Good;

class CategoriesRepository extends Repository
{
    public function __construct(Good $good)
    {
        $this->model = $good;
    }
}