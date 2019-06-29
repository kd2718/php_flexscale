<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
