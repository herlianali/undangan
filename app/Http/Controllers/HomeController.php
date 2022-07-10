<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function home()
    {
        return view('beranda');
    }

    public function ucapan()
    {
        return view('ucapan');
    }
}
