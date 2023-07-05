<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutSystemController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.aboutSystem.index');
    }
}
