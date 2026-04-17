<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('menu.home');
    }

    public function photos()
    {
        return view('menu.photos');
    }

    public function contact()
    {
        return view('menu.contact');
    }
}
