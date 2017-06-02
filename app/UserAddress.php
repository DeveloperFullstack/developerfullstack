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
        'city',
        'street',
        'interior',
        'neighborhood',
    ];

    public function user()
    {
        return $this->hasMany('App\ModelAdapters\UserAdapter', 'user_id');
    }
}
