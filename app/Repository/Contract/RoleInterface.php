<?php

namespace App\Repository\Contract;

use App\Data\Role as RoleData;

interface RoleInterface {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(RoleData $role);
    public function get(string $id);
    public function update(RoleData $role, string $id);
    public function delete(string $id);
}