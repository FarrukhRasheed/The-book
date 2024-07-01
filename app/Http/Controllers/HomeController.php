<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('index');
    }



    function indexadmin(){
        return view('Admin.index');
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
    function benifit(){
        return view('benifit');
    }
    function contact(){
        return view('contact');
    }
    function testimonial(){
        return view('testimonial');
    }
}
