<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Utils\StringUtil;

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
        $this->attributes['city'] = StringUtil::capitalize($value);
    }

    public function setStreetAttribute($value)
    {
        $this->attributes['street'] = StringUtil::capitalize($value);
    }

    public function setInteriorAttribute($value)
    {
        $this->attributes['interior'] = StringUtil::capitalize($value);
    }

    public function setNeighborhoodAttribute($value)
    {
        $this->attributes['neighborhood'] = StringUtil::capitalize($value);
    }
}
