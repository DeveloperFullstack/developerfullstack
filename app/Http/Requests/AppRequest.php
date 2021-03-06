<?php

namespace App\Http\Requests;

use Illuminate\Http\Request as BaseRequest;
use EBM\UIApplication\AbstractUIApplication;
use Auth;
use App\UIApplication\Factory as UIApplicationFactory;
use App\ModelAdapters\UserAdapter as User;

class AppRequest extends BaseRequest
{
    public function getUIApplication(): AbstractUIApplication
    {
        $user = Auth::user();

        $userAdapter = User::find($user->id);

        return UIApplicationFactory::get($userAdapter);
    }
}
