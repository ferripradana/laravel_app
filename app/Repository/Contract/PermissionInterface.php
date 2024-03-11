<?php

namespace App\Repository\Contract;

use App\Data\Permission as PermissionData;

interface PermissionInterface {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(PermissionData $permission);
    public function get(string $id);
    public function update(PermissionData $permission, string $id);
    public function delete(string $id);
}