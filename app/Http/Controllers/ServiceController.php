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

     public function epoxy()
    {
        return view('pages.services.epoxy');
    }

     public function roofing()
    {
        return view('pages.services.roofing');
    }

     public function panel()
    {
        return view('pages.services.panel');
    }

     public function road()
    {
        return view('pages.services.road');
    }

     public function landscape()
    {
        return view('pages.services.landscape');
    }

     public function interior()
    {
        return view('pages.services.interior');
    }

     public function temporary()
    {
        return view('pages.services.temporary');
    }

     public function electrical()
    {
        return view('pages.services.electrical');
    }

     public function door()
    {
        return view('pages.services.door');
    }
}
