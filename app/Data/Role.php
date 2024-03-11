<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class Role extends Data {
    
    public function __construct(
        public string $name
    ){   
    }

}
