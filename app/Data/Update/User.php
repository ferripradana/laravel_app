<?php

namespace App\Data\Update;

use Spatie\LaravelData\Data;

class User extends Data {
    
    public function __construct(
        public string $email,
        public string $name,
        public ?string $password,
        public ?string $role,
    ){   
    }

    public static function rules(): array
    {
        return [
            'email' => ['required', 'string'],
            'name' => ['required', 'string'],
            'password' => ['confirmed','min:6']
        ];
    }

}
