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
    public function veight(){
        return view('18v');
    }

    public function oneten(){
        return view('110');
    }
    public function fourfive(){
        return view('4520');
    }
    public function fourseven(){
        return view('4720');
    }
    public function fivefive(){
        return view('5520');
    }
    public function sevenfive(){
        return view('7520');
    }
    public function ninetwo(){
        return view('9220');
    }
    public function stwosix(){
        return view('s26');
    }
}
