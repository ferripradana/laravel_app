<?php

namespace App\Repository\Contract;

use App\Data\User as UserData;
use App\Data\Update\User as UpdateUser;

interface UserInterface {
    public function getAll(int $perPage,int $currentPage, string $sortBy, string $sortDirection, string $search);
    public function save(UserData $user);
    public function get(string $id);
    public function update(UpdateUser $user, string $id);
    public function delete(string $id);
}