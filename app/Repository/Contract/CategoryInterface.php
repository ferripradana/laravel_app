<?php

namespace App\Repository\Contract;

use App\Data\Category as CategoryData;

interface CategoryInterface {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(CategoryData $category);
    public function get(string $id);
    public function update(CategoryData $category, string $id);
    public function delete(string $id);
}