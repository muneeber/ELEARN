<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        $role=Auth::user()->Role;
        // dd(Auth::user()->Role);
        if($role=='creator'){
            $data=CourseModel::all();
            return view('creator.dashboard',['courses'=>$data]);
        }
        else if($role=='learner'){
            echo 'Welcome Learner';
            
        }
        

    }
}
