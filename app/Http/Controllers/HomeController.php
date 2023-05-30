<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function tentang_kami(){
        return view('profile.tentang-kami');
    }

    public function sejarah(){
        return view('profile.sejarah');
    }
}
