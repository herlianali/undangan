<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;

class ElramaController extends Controller
{
    public function index($name)
    {
        $ucapans = Ucapan::latest()->get();
        return view('elrama.index', compact('ucapans'), compact('name'));
    }
}
