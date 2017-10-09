<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function test(){
        
        return view('tour.test');
    }

     public function admin(){
        
        return view('layouts.admin');
    }

      public function router_test(){
        
        return view('test.router_text');
    }

    public function eventsMange(){
        return view('pages.events');
    }
}
