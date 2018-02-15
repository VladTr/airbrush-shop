<?php

namespace Shop\Repositories;

use Shop\Slider;

class SlidersRepository extends Repository
{
    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }


}
