<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.services');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function book(){
        return view('pages.book');
    }
    public function team(){
        return view('pages.team');
    }
    public function contact(){
        return view('pages.contact');
    }
}
