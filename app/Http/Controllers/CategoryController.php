<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Service\Category\CategoryService;

class CategoryController extends BaseController
{   
    public function __construct(
        CategoryService $categoryService
    ){
        $this->service = $categoryService;
    }

    public function store(CategoryRequest $request){
        return parent::post($request);
    }

    public function update(CategoryRequest $request, string $id){
        return parent::put($request, $id);
    }
}
