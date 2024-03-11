<?php

namespace App\Http\Controllers;

use App\Service\User\UserService;
use Illuminate\Http\Request;

class UserController extends BaseController
{   
    public function __construct(
        UserService $userService
    ){
        $this->dataObject = "App\Data\User";
        $this->service = $userService;
    }

    public function update(Request $request, string $id){
        $this->dataObject = "App\Data\Update\User";
        return parent::update($request, $id);   
    }
}
