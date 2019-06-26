<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    // link back to profile
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
