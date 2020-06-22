<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about(){
    	return view('about');
    }
    
    public function contacts(){
    	return view('contacts');
    }

    public function ar(){
    	return view('admission-requirement');
    }
}
