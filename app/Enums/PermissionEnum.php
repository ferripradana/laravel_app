<?php

namespace App\Enums;

enum PermissionEnum: string {
    case CATEGORY_CREATE = "category.create";
    case CATEGORY_VIEW = "category.view";
    case CATEGORY_EDIT = "category.edit";
    case CATEGORY_DELETE = "category.delete";
    
    public function label(): string{
        return match ($this) {
            static::CATEGORY_CREATE => 'Category Create',
            static::CATEGORY_VIEW => 'Category View',
            static::CATEGORY_EDIT => 'Category Edit',
            static::CATEGORY_DELETE => 'Category Delete',
        };
    }
}