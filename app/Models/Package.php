<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
