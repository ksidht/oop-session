<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use Session;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        Session::flash('password', 'Vrisabh');
        $session = Session::all();
        Log::info('test');
        return view('home');
    }

    public function about()
    {
        // Session::forget('password');
        return response()->json(Session::all());
    }

    public function contact()
    {
        return response()->json(Session::all());
    }

    public function test()
    {
        Session::reflash();
        return response()->json(Session::all());
    }
}
