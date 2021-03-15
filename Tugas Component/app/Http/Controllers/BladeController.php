<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index(){
        return view('pages.home', ['name'=>'Rispianti'], ['page'=>'Home']);
    }
    public function about(){
        return view('pages.about', ['page'=>'About']);
    }
    public function contact(){
        return view('pages.contact', ['page'=>'Contact']);
    }
}
