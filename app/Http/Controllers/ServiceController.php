<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function construction()
    {
        return view('pages.services.construction');
    }
    
    public function warehouse()
    {
        return view('pages.services.warehouse');
    }

    public function piping()
    {
        return view('pages.services.piping');
    }

     public function walling()
    {
        return view('pages.services.walling');
    }
}
