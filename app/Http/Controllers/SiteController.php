<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Repositories\CategoriesRepository;
use Shop\Repositories\MenusRepository;
use Menu;

class SiteController extends Controller
{
    protected $goods_rep;
    protected $slider_rep;
    protected $articles_rep;
    protected $menus_rep;
    protected $categories_rep;
    protected $template;

    protected $vars = array();

    protected $bar = false;
    protected $contentRightBar = false;
    protected $contentLeftBar = false;


    public function __construct(MenusRepository $menus_rep)
    {
        $this->menus_rep = $menus_rep;
    }

    protected function renderOutput (){
        $menu = $this->getMenu();
        $navigation = view(env('THEME').'.navigation')->with('menu',$menu)->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);
        return view($this->template)->with($this->vars);
    }


    protected function getMenu(){
        $menu = $this->menus_rep->get();
        $menuBuilder = Menu::make('MyNav', function ($m) use($menu){
            foreach ($menu as $item){
                if ($item->parent_id == 0){
                    $m->add($item->title, $item->path)->id($item->id);
                } else {
                    if ($m->find($item->parent_id)) {
                        $m->find($item->parent_id)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });
        return $menuBuilder;
    }
}
