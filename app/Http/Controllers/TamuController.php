<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function Index()
    {
        $i = 0;
        $tamus = Tamu::latest()->get();
        return view('elrama.admin.tamu', compact('tamus'))->with('i');
        $lastUrl = request()->segment(count(request()->segments()));
    }
}
