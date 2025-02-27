<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Service extends BaseModel
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;

    public function testLists(): MorphMany
    {
        return $this->morphMany(TestList::class, 'testlistable');
    }
}
