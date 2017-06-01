<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequestDispatcher;
use App\ModelAdapters\UserAdapter as User;

class ApplicationController extends Controller
{
    public function seccion(String $slug = null)
    {
        $UIApplication = request()->getUIApplication();

        $section = $UIApplication->getSectionBySlug($slug);

        $section->setFields();

        return view('front/application/seccion', compact('section'));
    }

    public function store(SectionRequestDispatcher $request, String $slug)
    {
        $UIApplication = request()->getUIApplication();

        $section = $UIApplication->getSectionBySlug($slug);

        $section->save();

        $nextSectionSlug = $UIApplication->getNextSectionSlug($slug);

        if (!$nextSectionSlug) {
            return redirect()->route('front.application.completa');
        }

        return redirect()->route('front.application.seccion', ['slug' => $nextSectionSlug]);
    }
}
