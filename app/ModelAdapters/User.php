<?php

namespace App\ModelAdapters;

use App\User;

class UserAdapter extends User
{
    public static function boot()
    {
        parent::boot();

        static::creating(function($user){
            $user->token = str_random(30);
            $user->referral_code = str_random(7);
        });
    }

    public function confirmEmail()
    {
        $this->is_verified = true;
        $this->token = null;
        $this->save();

        return [
            'referral_code' => $this->referral_code,
        ];
    }
}
