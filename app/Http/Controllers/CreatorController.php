<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function addcourse(){
        return view('creator.addcourse');
    }
}
