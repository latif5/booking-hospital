<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolyController extends Controller
{
    public function show()
    {
        return view('admin.poly');
    }
}
