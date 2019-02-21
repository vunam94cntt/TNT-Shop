<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function home(){
    	return view('frontend.home');
    }
    
    public function register(){
    	return view('frontend.register');
    }
}
