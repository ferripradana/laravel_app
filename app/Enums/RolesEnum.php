<?php

namespace App\Enums;

enum RolesEnum: string {
    case ADMIN = "admin";
    case STAFF = "staff";
    
    public function label(): string{
        return match ($this) {
            static::ADMIN => 'Admins',
            static::STAFF => 'Staffs',
        };
    }
}