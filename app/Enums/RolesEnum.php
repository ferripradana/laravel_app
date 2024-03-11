<?php

namespace App\Enums;

enum RolesEnum: string {
    case ADMIN = "admin";
    case STAFF = "staff";
    case NO = "no";
    
    public function label(): string{
        return match ($this) {
            static::ADMIN => 'Admin',
            static::STAFF => 'Staff',
            static::NO => 'No Role'
        };
    }
}