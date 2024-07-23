<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function home(){
        return view('user.index');
    }
    public function services()
    {
        return view('user.services');
    }
    public function process()
    {
        return view('user.process');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact_us()
    {
        return view('user.contact');
    }
    public function terms()
    {
        return view('user.terms');
    }

    public function privacy()
    {
        return view('user.privacy');
    }    
   
}
