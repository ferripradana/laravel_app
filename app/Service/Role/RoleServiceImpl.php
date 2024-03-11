<?php

namespace App\Service\Role;

use App\Repository\Contract\RoleInterface;
use App\Data\Role;

class RoleServiceImpl implements RoleService {

    protected $repository;

    public function __construct(
        RoleInterface $repository
    ){
        $this->repository = $repository;
    }

    public function getAll(int $perPage,int $page, string $sortBy, string $sortDirection, string $search){
        return $this->repository->getAll($perPage, $page, $sortBy, $sortDirection, $search);
    }
    
    public function save(Role $role){
        return $this->repository->save($role);
    }

    public function get(string $id){
        return $this->repository->get($id);
    }

    public function update(Role $role, string $id){
        return $this->repository->update($role, $id);
    }

    public function delete(string $id){
        return $this->repository->delete($id);
    }

}