<?php

namespace App\Service\Permission;

use App\Data\Permission;

interface PermissionService {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(Permission $permission);
    public function get(string $id);
    public function update(Permission $permission, string $id);
    public function delete(string $id);
}