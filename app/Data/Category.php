<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class Category extends Data {
    
    public function __construct(
        public string $name
    ){   
    }

}
