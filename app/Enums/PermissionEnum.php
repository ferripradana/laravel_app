<?php

namespace App\Enums;

enum PermissionEnum: string {
    case CATEGORY_CREATE = "category.create";
    case CATEGORY_VIEW = "category.view";
    case CATEGORY_EDIT = "category.edit";
    case CATEGORY_DELETE = "category.delete";

    case USER_CREATE = "user.create";
    case USER_VIEW = "user.view";
    case USER_EDIT = "user.edit";
    case USER_DELETE = "user.delete";
    
    public function label(): string{
        return match ($this) {
            static::CATEGORY_CREATE => 'Category Create',
            static::CATEGORY_VIEW => 'Category View',
            static::CATEGORY_EDIT => 'Category Edit',
            static::CATEGORY_DELETE => 'Category Delete',

            static::USER_CREATE => 'User Create',
            static::USER_VIEW => 'User View',
            static::USER_EDIT => 'User Edit',
            static::USER_DELETE => 'User Delete',
        };
    }
}