<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySearchesController extends Controller
{
    public function index()
    {
        return view('mano-paieskos');
    }
}
