<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function dashboard()
    {
        $title = "Selamat Datang";

        return view('admin.dashboard', compact('title'));
    }

}
