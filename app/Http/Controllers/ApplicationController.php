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
    public function seccion(String $slug)
    {
        $user = Auth::user();

        $UIApplication = UIApplicationFactory::get($user);

        $section = $UIApplication->getSectionBySlug($slug);
        $section->setFields();

        return view('front/application/seccion', compact('section'));
    }

    public function store(Request $request, String $slug)
    {
        $user = Auth::user();

        $UIApplication = UIApplicationFactory::get($user);

        $nextSectionSlug = $UIApplication->getNextSectionSlug($slug);

        var_dump($nextSectionSlug); exit;

        return redirect()->route('front.application.seccion')->with('slug', $nextSectionSlug);
    }
}
