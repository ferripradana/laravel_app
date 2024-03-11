<?php

namespace App\Http\Controllers;

use App\Service\Role\RoleService;
use Illuminate\Http\Request;
use App\Data\Update\RolePermission;

class RoleController extends BaseController
{   
    public function __construct(
        RoleService $roleService
    ){
        $this->dataObject = "App\Data\Role";
        $this->service = $roleService;
    }

    public function savePermission(Request $request, string $id){
        $data = RolePermission::from($request);
        return $this->service->savePermission($data, $id);
    }
}
