<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function testLists()
    {
        return $this->hasMany(TestList::class);
    }
}
