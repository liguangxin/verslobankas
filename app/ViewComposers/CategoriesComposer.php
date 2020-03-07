<?php

namespace App\ViewComposers;

use App\Category;
use Illuminate\View\View;

class CategoriesComposer
{
    private $data;

    public function __construct()
    {
        $this->data = Category::all();
    }

    public function compose(View $view)
    {
        $view->with('categories', $this->data);
    }
}
