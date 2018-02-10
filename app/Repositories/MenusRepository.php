<?php

namespace Shop\Repositories;

use Shop\Menu;

class MenusRepository extends Repository
{
    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }


}
