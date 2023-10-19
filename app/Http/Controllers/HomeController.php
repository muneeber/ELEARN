<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        $role=Auth::user()->Role;
        // dd(Auth::user()->Role);
        if($role=='creator'){
            return view('creator.dashboard');
        }
        else if($role=='learner'){
            echo 'Welcome Learner';
            
        }
        

    }
}
