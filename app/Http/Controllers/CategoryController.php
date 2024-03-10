<?php

namespace App\Http\Controllers;

use App\Service\Category\CategoryService;

class CategoryController extends BaseController
{   
    public function __construct(
        CategoryService $categoryService
    ){
        $this->dataObject = "App\Data\Category";
        $this->service = $categoryService;
    }
}
