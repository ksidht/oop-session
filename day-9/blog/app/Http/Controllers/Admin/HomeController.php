<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    public function index(Request $request)
    {
    	
        dd(Auth::guest());

    	return view('home.index', compact('name'));
    }

    public function about()
    {
    	dd('From Admin namespace');

    }

    public function contact()
    {
    	return view('home.contact');
    }
}
