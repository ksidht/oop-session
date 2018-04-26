<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = 'abc' )
    {
    	return view('home.index', compact('name'));
    }

    public function about()
    {
    	return view('home.about');
    }

    public function contact()
    {
    	return view('home.contact');
    }
}
