<?php

namespace App\Service\Category;

use App\Data\Category;

interface CategoryService {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(Category $category);
    public function get(string $id);
    public function update(Category $category, string $id);
    public function delete(string $id);
}