<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Repositories\MenusRepository;

class SiteController extends Controller
{
    protected $goods_rep;
    protected $slider_rep;
    protected $articles_rep;
    protected $menus_rep;
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
        dd($menu);

        $navigation = view(env('THEME').'.navigation')->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);
        return view($this->template)->with($this->vars);
    }

    protected function getMenu(){
        $menu = $this->menus_rep->get();
        return $menu;
    }
}
