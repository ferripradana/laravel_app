<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;

    protected $table = "category";
    protected $primaryKey = "id";
    protected $fillable = ['name'];

    protected $hidden = [];
}
