<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.02.2018
 * Time: 22:08
 */

namespace Shop\Repositories;

use Config;

abstract class Repository
{
    protected $model = false;

    public function get()
    {
        $builder=$this->model->select('*');

        return $builder->get();
    }
}