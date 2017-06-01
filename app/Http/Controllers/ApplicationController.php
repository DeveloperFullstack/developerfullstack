<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUser;
use App\ModelAdapters\UserAdapter as User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OnRegisterVerification;
use Auth;
use App\UIApplication\Factory as UIApplicationFactory;

class ApplicationController extends Controller
{
    public function seccion()
    {
        $user = Auth::user();

        $UIApplication = UIApplicationFactory::get($user);

        return view('front/application/seccion');
    }
}
