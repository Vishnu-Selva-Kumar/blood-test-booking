<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Package extends BaseModel
{
    /** @use HasFactory<\Database\Factories\PackageFactory> */
    use HasFactory;

    protected $appends = ['imageUrl'];


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

    public function scopeImageUrl($query)
    {


        return route('web.media', ['path' => $query->image]);
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? route('web.media', ['path' => $this->image]) : null;
    }
}
