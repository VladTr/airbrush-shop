<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function goods(){
        return $this->belongsToMany('Shop\Good', 'goods_categories');
    }
}
