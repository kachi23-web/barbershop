<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin-dash.index');
    }
    public function profile(){
        return view('admin-dash.pages.profile');
    }
    public function service(){
        return view('admin-dash.pages.services');
    }
    public function blog(){
        return view('admin-dash.pages.blog');
    }
}
