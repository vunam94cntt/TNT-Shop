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
    public function login(){
    	return view('frontend.login');
    }
    public function detail(){
    	return view('frontend.detail');
    }
    public function filtergrid(){
    	return view('frontend.filtergrid');
    }
    public function filterlist(){
    	return view('frontend.filterlist');
    }
    public function addtocart(){
    	return view('frontend.addtocart');
    }
}
