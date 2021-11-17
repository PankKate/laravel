<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
    	return view('home');
    }
    public function films(){
    	return view('films');
    }
    public function births(){
    	return view('births');
    }
   
    public function another(){
    	return view('another');
    }
}

