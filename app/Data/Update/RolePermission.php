<?php

namespace App\Data\Update;

use Spatie\LaravelData\Data;
use Illuminate\Support\Collection;
use App\Data\Permission;

class RolePermission extends Data {
    
    public function __construct(
        public Collection $permission
    ){   
        $this->permission = Permission::collect($permission);
    }

}
