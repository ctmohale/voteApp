<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class Page extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function register(){
        return view('user.register');
    }
}
