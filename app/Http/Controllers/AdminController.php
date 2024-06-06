<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin == 0) {
            abort(404);
        }
        return view('adminpanel');
    }
}
