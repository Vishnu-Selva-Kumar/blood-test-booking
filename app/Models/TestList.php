<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestList extends BaseModel
{
    /** @use HasFactory<\Database\Factories\TestListFactory> */
    use HasFactory;

    function package()
    {
        return $this->belongsTo(Package::class);
    }
}
