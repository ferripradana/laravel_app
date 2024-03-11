<?php

namespace App\Data\Response;

use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;
use App\Data\Response\Role;

class User extends Data {
    public function __construct(
        public int $id,
        public string $email,
        public string $name,
        public ?Collection $roles,
    ){   
        if(!empty($roles))
            $this->roles = Role::collect($roles);
    }
}
