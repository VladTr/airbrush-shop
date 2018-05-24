<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;


/**
 * @property array $goods
 */
class Category extends Model
{
    public function goods(){
        return $this->belongsToMany('Shop\Good', 'goods_categories');
    }
}
