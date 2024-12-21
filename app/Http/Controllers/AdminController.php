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

    // sidebar List
    public function invoiceDetail(){
        return view('admin-dash.pages.invoice-detail');
    }
    public function invoiceGenerator(){
        return view('admin-dash.pages.invoice-generator');
    }
    public function invoiceList(){
        return view('admin-dash.pages.invoice-list');
    }


    public function mail(){
        return view('admin-dash.pages.mail');
    }
    public function mailDetails(){
        return view('admin-dash.pages.mail-details');
    }
    public function mailDraft(){
        return view('admin-dash.pages.mail-draft');
    }

    public function createPost(){
        return view('admin-dash.pages.create-post');
    }
}
