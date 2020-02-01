<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        return view('ads.index');
    }

    public function get_ad()
    {
        return view('ads.ad');
    }
}
