<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function book(){
        return view('book');
    }
    function pricing(){
        return view('pricing');
    }
}
