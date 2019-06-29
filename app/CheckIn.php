<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CheckIn
 *
 * @property int $id
 * @property int $profile_id
 * @property int $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Profile $profile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn whereProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CheckIn whereWeight($value)
 * @mixin \Eloquent
 */
class CheckIn extends Model
{
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
