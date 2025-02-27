<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    //

    protected $guarded = [];

    protected $perPage = 30;

    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where('name', 'like', '%' . $search . '%');
        }
        return $query;
    }

    public function scopeSort($query, $sort)
    {
        if ($sort) {
            return $query->orderBy($sort);
        }
        return $query;
    }

    public function getstatusTextAttribute()
    {
        return $this->status ? 'Active' : "In Active";
    }


    public function scopeWhereInActive($query)
    {
        return $query->where(['status' => config('web.constants.status.inactive') ?? 0]);
    }

    public function scopeWhereActive($query)
    {
        return $query->where(['status' => config('web.constants.status.active') ?? 1]);
    }
}
