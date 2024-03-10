<?php

namespace App\Data\Response;

use Spatie\LaravelData\Data;

class Category extends Data {
    
    public function __construct(
        public int $id,
        public string $name
    ){   
    }

}
