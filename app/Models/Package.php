<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Package extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'widgets' => 'array',
            'faq' => 'array',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function testLists(): MorphMany
    {
        return $this->morphMany(TestList::class, 'testlistable');
    }
}
