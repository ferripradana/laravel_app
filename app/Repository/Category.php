<?php

namespace App\Repository;

use App\Http\Requests\CategoryRequest;
use App\Repository\Contract\CategoryInterface;
use App\Models\Category as CategoryModel;

class Category implements CategoryInterface {
    
    public function getAll(int $perPage, int $currentPage, string $sortBy, string $sortDirection, string $search){
        return CategoryModel::query()
                            ->where('name', 'LIKE', '%' . $search . '%')
                            ->orderBy($sortBy, $sortDirection)
                            ->paginate($perPage,['*'], 'page', $currentPage);
    }

    public function save(CategoryRequest $request){
        $category = CategoryModel::create($request->all());
        return $category;
    }

    public function get(string $id){
        return CategoryModel::findorFail($id);
    }

    public function update(CategoryRequest $request, string $id){
        $category = CategoryModel::findOrFail($id);
        $category->update($request->all());
        return $category;
    }

    public function delete(string $id){
        $category = CategoryModel::findOrFail($id);
        $category->delete();
    }
}