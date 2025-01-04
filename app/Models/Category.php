<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
