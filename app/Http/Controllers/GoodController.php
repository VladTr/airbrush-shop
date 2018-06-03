<?php
namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Category;
use Shop\Menu;
use Config;
use Shop\Repositories\MenusRepository;


class GoodController extends SiteController
{

    public function __construct()
    {
        parent::__construct(new MenusRepository(new Menu()));
        $this->template = env('THEME').'.goods_template';
    }

    public function index($id){
        $goodsItems = Category::find($id)->goods;
        $goods = view(env('THEME').'.goods')->with('goods', $goodsItems)->render();
        $this->vars = array_add($this->vars, 'goods', $goods);
        return $this->renderOutput();
    }

}
