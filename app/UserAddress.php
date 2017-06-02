<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'user_address';

    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'zip_code',
        'city',
        'street',
        'interior',
        'neighborhood',
    ];

    public function user()
    {
        return $this->belongsTo('App\ModelAdapters\UserAdapter', 'user_id');
    }

    public function setCityAttribute($value)
    {
        $val = strtolower($value);
        $val = ucwords($val);
        $this->attributes['city'] = ucfirst($val);
    }

    public function setStreetAttribute($value)
    {
        $val = strtolower($value);
        $val = ucwords($val);
        $this->attributes['street'] = ucfirst($val);
    }

    public function setInteriorAttribute($value)
    {
        $val = strtolower($value);
        $val = ucwords($val);
        $this->attributes['interior'] = ucfirst($val);
    }

    public function setNeighborhoodAttribute($value)
    {
        $val = strtolower($value);
        $val = ucwords($val);
        $this->attributes['neighborhood'] = ucfirst($val);
    }
}
