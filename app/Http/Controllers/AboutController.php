<?php

namespace Shop\Http\Controllers;
use Illuminate\Http\Request;
use Shop\Menu;
use Shop\Repositories\MenusRepository;

class AboutController extends SiteController
{
    public function __construct()
    {
        parent::__construct(new MenusRepository(new Menu()));
        $this->template = env('THEME').'/templates/common_template';
    }

    public function index(){
        $aboutItem = 'ABOUT';
        $about = view(env('THEME').'.about')->with('about', $aboutItem)->render();
        $this->vars = array_add($this->vars, 'about', $about);
        return $this->renderOutput();
    }
}
