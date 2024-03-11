<?php

namespace App\Data\Response;
use Spatie\LaravelData\Data;

class Permission extends Data {

    public function __construct(
        public int $id,
        public string $name,
        public string $guard_name
    ){
    }

}