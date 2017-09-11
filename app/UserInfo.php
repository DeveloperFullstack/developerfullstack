<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'paternal_last_name',
        'maternal_last_name',
        'mobile_number',
        'dob',
    ];
}
