<?php

namespace App\Service\User;

use App\Repository\Contract\UserInterface;
use App\Data\User;
use App\Data\Update\User as UpdateUser;

class UserServiceImpl implements UserService {

    protected $repository;

    public function __construct(
        UserInterface $repository
    ){
        $this->repository = $repository;
    }

    public function getAll(int $perPage,int $page, string $sortBy, string $sortDirection, string $search){
        return $this->repository->getAll($perPage, $page, $sortBy, $sortDirection, $search);
    }
    
    public function save(User $user){
        return $this->repository->save($user);
    }

    public function get(string $id){
        return $this->repository->get($id);
    }

    public function update(UpdateUser $user, string $id){
        return $this->repository->update($user, $id);
    }

    public function delete(string $id){
        return $this->repository->delete($id);
    }

}