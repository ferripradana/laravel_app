<?php

namespace App\Service\Role;

use App\Data\Role;

interface RoleService {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(Role $role);
    public function get(string $id);
    public function update(Role $role, string $id);
    public function delete(string $id);
}