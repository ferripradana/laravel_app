<?php

namespace App\Service\Category;

use App\Repository\Contract\CategoryInterface;
use App\Data\Category;

class CategoryServiceImpl implements CategoryService {

    protected $repository;

    public function __construct(
        CategoryInterface $repository
    ){
        $this->repository = $repository;
    }

    public function getAll(int $perPage,int $page, string $sortBy, string $sortDirection, string $search){
        return $this->repository->getAll($perPage, $page, $sortBy, $sortDirection, $search);
    }
    
    public function save(Category $category){
        return $this->repository->save($category);
    }

    public function get(string $id){
        return $this->repository->get($id);
    }

    public function update(Category $category, string $id){
        return $this->repository->update($category, $id);
    }

    public function delete(string $id){
        return $this->repository->delete($id);
    }

}