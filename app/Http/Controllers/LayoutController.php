<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function about(){
        return view('web.about');
    }
    public function contact(){
        return view('web.contact');
    }
    public function course(){
        return view('web.course');
    }
   
}
