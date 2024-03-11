<?php

namespace App\Data\Response;
use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;

class RolePermission extends Data {

    public function __construct(
        public int $id,
        public string $name,
        public Collection $permissions
    ){
        $this->permissions = Permission::collect($permissions);
    }

}