<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function spares(){
        return view('spares');
    }

    public function gallery(){
        return view('gallery');
    }

    public function tractors(){
        return view('tractors');
    }
    public function contact(){
        return view('contact');
    }
}
