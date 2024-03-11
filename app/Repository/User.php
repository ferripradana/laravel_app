<?php

namespace App\Repository;

use App\Data\User as UserData;
use App\Data\Response\User as UserResponse;
use App\Repository\Contract\UserInterface;
use App\Models\User as UserModel;
use App\Data\Response\Role as RoleResponse;
use App\Data\Update\User as UpdateUser;

class User implements UserInterface {
    
    public function getAll(int $perPage, int $currentPage, string $sortBy, string $sortDirection, string $search){
        return UserResponse::collect(UserModel::query()
                            ->where('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('email', 'LIKE', '%' . $search . '%')
                            ->orderBy($sortBy, $sortDirection)
                            ->with('roles')
                            ->paginate($perPage,['*'], 'page', $currentPage));
    }

    public function save(UserData $userData){
        $user = UserModel::create($userData->all());
        if(!empty($userData->role)){
            $user = $user->syncRoles($userData->role);
        }
        $user = $user->fresh();
        $user->load('roles');
        return UserResponse::from($user);
    }

    public function get(string $id){
        $user = UserModel::with('roles')->findorFail($id);
        return UserResponse::from($user);
    }

    public function update(UpdateUser $userData, string $id){
        $user = UserModel::findOrFail($id);
        $user->fill(array_filter($userData->all()));
        $user->save();
        if(!empty($userData->role)){
            $user->syncRoles($userData->role);
        }
        $user = $user->fresh();
        $user->load('roles');
        return UserResponse::from($user);
    }

    public function delete(string $id){
        $user = UserModel::findOrFail($id);
        $user->delete();
    }
}