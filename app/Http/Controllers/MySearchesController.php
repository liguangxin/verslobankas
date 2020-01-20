<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySearchesController extends Controller
{
    public function index()
    {
        return view('my-searches.index');
    }

    public function edit(Request $request)
    {
        return view('my-searches.edit', [
            'id' => $request->id,
        ]);
    }
}
