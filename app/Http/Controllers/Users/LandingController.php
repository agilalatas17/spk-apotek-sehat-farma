<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function welcome()
    {
        return view('landing.welcome');
    }

    public function rekomendasi()
    {
        return view('landing.rekomendasi');
    }
}
