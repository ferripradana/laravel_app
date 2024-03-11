<?php

namespace App\Service\User;

use App\Data\User;
use App\Data\Update\User as UpdateUser;

interface UserService {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(User $user);
    public function get(string $id);
    public function update(UpdateUser $user, string $id);
    public function delete(string $id);
}