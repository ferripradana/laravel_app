<?php

namespace App\Repository;

use App\Data\Permission as PermissionData;
use App\Repository\Contract\PermissionInterface;
use Spatie\Permission\Models\Permission as PermissionModel;


class Permission implements PermissionInterface {
    
    public function getAll(int $perPage, int $currentPage, string $sortBy, string $sortDirection, string $search){
        return PermissionModel::query()
                        ->where('name', 'LIKE', '%' . $search . '%')
                        ->orderBy($sortBy, $sortDirection)
                        ->paginate($perPage,['*'], 'page', $currentPage);
    }

    public function save(PermissionData $permissionData){
        $permission = PermissionModel::create($permissionData->all());
        return $permission;
    }

    public function get(string $id){
        return PermissionModel::findorFail($id);
    }

    public function update(PermissionData $permissionData, string $id){
        $permission = PermissionModel::findOrFail($id);
        $permission->update($permissionData->all());
        return $permission;
    }

    public function delete(string $id){
        $role = PermissionModel::findOrFail($id);
        $role->delete();
    }
}