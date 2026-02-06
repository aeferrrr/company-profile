<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.perusahaan.about');
    }

    public function services()
    {
        return view('pages.services.index');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function organization()
    {
    return view('pages.perusahaan.organization');
    }

    
}
