<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Utils\StringUtil;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'token',
        'referral_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student()
    {
        return $this->hasMany(\App\ModelAdapters\StudentAdapter::class, 'user_id');
    }

    public function address()
    {
        return $this->hasMany(\App\ModelAdapters\UserAddressAdapter::class, 'user_id');
    }

    public function info()
    {
        return $this->hasMany(\App\ModelAdapters\UserInfoAdapter::class, 'user_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = StringUtil::capitalize($value);
    }

    public function setPaternalLastNameAttribute($value)
    {
        $this->attributes['paternal_last_name'] = StringUtil::capitalize($value);
    }

    public function setMaternalLastNameAttribute($value)
    {
        $this->attributes['maternal_last_name'] = StringUtil::capitalize($value);
    }

    public function setMobileNumberAttribute($value)
    {
        $this->attributes['mobile_number'] = StringUtil::cleanPhone($value);
    }
}
