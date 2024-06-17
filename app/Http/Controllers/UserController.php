<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('user.home');
    
        
    }
    public function about(){
        return view('user.about');
    
        
    }
    public function contact(){
        return view('user.contact');
    
        
    }

    public function clientlogin(){
        return view('user.clientlogin');
    
        
    }


}
