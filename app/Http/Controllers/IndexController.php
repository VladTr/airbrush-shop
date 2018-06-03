<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Category;
use Shop\Good;
use Shop\Menu;
use Shop\Repositories\CategoriesRepository;
use Shop\Repositories\MenusRepository;
use Shop\Repositories\SlidersRepository;
use Shop\Slider;
use Config;

class IndexController extends SiteController
{

    public function __construct(SlidersRepository $slider_rep, CategoriesRepository $categories_rep)
    {
        parent::__construct(new MenusRepository(new Menu()));
        $this->template = env('THEME').'.index';
        $this->bar = 'right';
        $this->slider_rep = $slider_rep;
        $this->categories_rep = $categories_rep;
    }

    /**
     * Display a listing of the resource.
     * @param $id string
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categoriesItems = $this->getCategory();
        $categories = view(env('THEME').'.categories')->with('categories', $categoriesItems)->render();
        $this->vars = array_add($this->vars, 'categories', $categories);

        $sliderItems = $this->getSliders();
        $sliders = view(env('THEME').'.slider')->with('sliders', $sliderItems)->render();
        $this->vars = array_add($this->vars, 'sliders', $sliders);

        $mainItems = 'some main';
        $main = view(env('THEME').'.main')->with('main', $mainItems)->render();
        $this->vars = array_add($this->vars, 'main', $main);

        return $this->renderOutput();
    }

    protected function getCategory() {
        $category = $this->categories_rep->get();
        return $category;
    }

    private function getSliders(){
        $sliders = $this->slider_rep->get();
        if ($sliders->isEmpty()){
            return false;
        }
        $sliders->transform(function ($item, $key){
            $item->img = Config::get('settings.slider_path').'/'.$item->img;
            return $item;
        });
        return $sliders;
    }

}
