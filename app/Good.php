<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
   public function categories(){
       return $this->belongsToMany('Shop\Category', 'goods_categories');
   }

}
