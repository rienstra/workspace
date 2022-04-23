<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller that serves only one single route

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
}
