<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashC extends Controller
{
    public function dashboard()
    {
        return view('backend.dash');
    }
}
