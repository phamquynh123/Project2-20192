<?php

namespace App\http\ViewComposers;

// use Illuminate\Support\Facades\View;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\View\View;
// use View;

class CategoryViewComposer
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $getCategory = [];

    public function __construct(CategoryRepositoryInterface $Category)
    {
        $this->getCategory = $Category->getAll();
    }

    public function compose(View $view)
    {
        $view->with('getCategories', $this->getCategory);
    }
}