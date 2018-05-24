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
        $this->template = env('THEME').'.t';
    }

    public function index($id){
        echo ('hi '. $id);
        $goodsItems = Category::find($id)->goods;
        $goods = view(env('THEME').'.goods')->with('goods', $goodsItems)->render();
        $this->vars = array_add($this->vars, 'goods', $goods);
        return $this->renderOutput();
    }

    /*
    protected function renderGoods ($id){
        $goods = Category::find($id)->goods;
        return view(env('THEME').'.goods')->with('goods',$goods)->render();
    }
    */

}

/*
 * if ($id) {
            $goodsItems = Category::find($id)->goods;
        } else {
            $goodsItems = Good::all();
        }

        $goods =  view(env('THEME').'.goods')->with('goods',$goodsItems)->render();
        $this->vars = array_add($this->vars, 'goods', $goods);

   public function  getGoodsByCategory($id) {
        $goodsItems = Category::find($id)->goods;
        return view(env('THEME').'.goods')->with('goods',$goodsItems)->render();
    }
 */