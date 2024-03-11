<?php

namespace App\Service\Permission;

use App\Repository\Contract\PermissionInterface;
use App\Data\Permission;
use App\Data\Response\Permission as PermissionResponse;

class PermissionServiceImpl implements PermissionService {

    protected $repository;

    public function __construct(
        PermissionInterface $repository
    ){
        $this->repository = $repository;
    }

    public function getAll(int $perPage,int $page, string $sortBy, string $sortDirection, string $search){
        return PermissionResponse::collect($this->repository->getAll($perPage, $page, $sortBy, $sortDirection, $search));
    }
    
    public function save(Permission $permission){
        return PermissionResponse::from($this->repository->save($permission));
    }

    public function get(string $id){
        return PermissionResponse::from($this->repository->get($id));
    }

    public function update(Permission $permission, string $id){
        return PermissionResponse::from($this->repository->update($permission, $id));
    }

    public function delete(string $id){
        return $this->repository->delete($id);
    }

}