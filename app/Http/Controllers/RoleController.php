<?php

namespace App\Http\Controllers;

use App\Service\Role\RoleService;

class RoleController extends BaseController
{   
    public function __construct(
        RoleService $roleService
    ){
        $this->dataObject = "App\Data\Role";
        $this->service = $roleService;
    }
}
