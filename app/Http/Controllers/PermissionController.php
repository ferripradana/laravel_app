<?php

namespace App\Http\Controllers;

use App\Service\Permission\PermissionService;

class PermissionController extends BaseController
{   
    public function __construct(
        PermissionService $permissionService
    ){
        $this->dataObject = "App\Data\Permission";
        $this->service = $permissionService;
    }
}
