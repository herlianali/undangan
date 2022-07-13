<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $ucapans = Ucapan::latest()->get();
        $test = Ucapan::latest()->get();
        return view('index', compact('ucapans'), compact('test'));
    }

    

}
