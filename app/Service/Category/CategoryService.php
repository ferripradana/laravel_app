<?php

namespace App\Service\Category;

use App\Http\Requests\CategoryRequest;

interface CategoryService {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(CategoryRequest $request);
    public function get(string $id);
    public function update(CategoryRequest $request, string $id);
    public function delete(string $id);
}