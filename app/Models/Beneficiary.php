<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends BaseModel
{
    //

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
