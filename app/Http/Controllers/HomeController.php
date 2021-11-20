<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing-page.home');
    }
    public function divisions()
    {
        return view('landing-page.divisions');
    }
    public function netwins()
    {
        return view('landing-page.netwins');
    }
    public function placements()
    {
        return view('landing-page.placements');
    }
}
