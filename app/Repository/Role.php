<?php

namespace App\Repository;

use App\Data\Role as RoleData;
use App\Repository\Contract\RoleInterface;
use Spatie\Permission\Models\Role as RoleModel;


class Role implements RoleInterface {
    
    public function getAll(int $perPage, int $currentPage, string $sortBy, string $sortDirection, string $search){
        return RoleModel::query()
                        ->where('name', 'LIKE', '%' . $search . '%')
                        ->orderBy($sortBy, $sortDirection)
                        ->with('permissions')
                        ->paginate($perPage,['*'], 'page', $currentPage);
    }

    public function save(RoleData $roleData){
        $role = RoleModel::create($roleData->all());
        return $role;
    }

    public function get(string $id){
        return RoleModel::with('permissions')->findorFail($id);
    }

    public function update(RoleData $roleData, string $id){
        $role = RoleModel::findOrFail($id);
        $role->update($roleData->all());
        return $role;
    }

    public function delete(string $id){
        $role = RoleModel::findOrFail($id);
        $role->delete();
    }
}