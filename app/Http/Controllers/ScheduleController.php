<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show()
    {
        return view('admin.schedule');
    }
    public function create()
    {
        return view('admin.add-schedule');
    }

    public function store()
    {
        
    }
    public function showBooking()
    {
        return view('admin.booking');
    }
}
