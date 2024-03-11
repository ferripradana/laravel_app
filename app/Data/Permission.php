<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class Permission extends Data {
    
    public function __construct(
        public string $name
    ){   
    }

}
