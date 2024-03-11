<?php

namespace App\Service\Role;

use App\Repository\Contract\RoleInterface;
use App\Data\Role;
use App\Data\Update\RolePermission;
use App\Data\Response\RolePermission as RolePermissionResponse;
use App\Data\Response\Role as RoleResponse;

class RoleServiceImpl implements RoleService {

    protected $repository;

    public function __construct(
        RoleInterface $repository
    ){
        $this->repository = $repository;
    }

    public function getAll(int $perPage,int $page, string $sortBy, string $sortDirection, string $search){
        return RolePermissionResponse::collect($this->repository->getAll($perPage, $page, $sortBy, $sortDirection, $search));
    }
    
    public function save(Role $role){
        return RoleResponse::from($this->repository->save($role));
    }

    public function get(string $id){
        return RolePermissionResponse::from($this->repository->get($id));
    }

    public function update(Role $role, string $id){
        return RoleResponse::from($this->repository->update($role, $id));
    }

    public function delete(string $id){
        return $this->repository->delete($id);
    }

    public function savePermission(RolePermission $rolePermission, string $id){
        $role = $this->repository->get($id);
        $permissions = [];
        foreach($rolePermission->permission as $permission){
            array_push($permissions, $permission->name);
        }
        $role->syncPermissions($permissions);
        $role = $role->fresh();
        $role->load('permissions');
        return RolePermissionResponse::from($role);
    }

}