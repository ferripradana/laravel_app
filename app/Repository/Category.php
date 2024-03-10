<?php

namespace App\Repository;

use App\Data\Category as CategoryData;
use App\Repository\Contract\CategoryInterface;
use App\Models\Category as CategoryModel;

class Category implements CategoryInterface {
    
    public function getAll(int $perPage, int $currentPage, string $sortBy, string $sortDirection, string $search){
        return CategoryModel::query()
                            ->where('name', 'LIKE', '%' . $search . '%')
                            ->orderBy($sortBy, $sortDirection)
                            ->paginate($perPage,['*'], 'page', $currentPage);
    }

    public function save(CategoryData $categoryData){
        $category = CategoryModel::create($categoryData->all());
        return $category;
    }

    public function get(string $id){
        return CategoryModel::findorFail($id);
    }

    public function update(CategoryData $categoryData, string $id){
        $category = CategoryModel::findOrFail($id);
        $category->update($categoryData->all());
        return $category;
    }

    public function delete(string $id){
        $category = CategoryModel::findOrFail($id);
        $category->delete();
    }
}