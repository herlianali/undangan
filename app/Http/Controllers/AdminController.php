<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('elrama.admin.login');
    }

    public function login(Request $request)
    {
        $usernameAkses = "Admin";
        $passwordAkses = "elramaJ";

        if($request->username == $usernameAkses && $request->password == $passwordAkses)
        {
            return redirect('elrama/admin/beranda');
        }
        return redirect('elrama/admin/login');
    }

    public function dashboard()
    {
        return view('elrama.admin.beranda');
    }


}
