<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseModelController extends Controller
{
    public function AddCourse(){
        return view('creator.addcourse');
    }
    public function StoreCourse(Request $request){

    $request->validate([
        'course_name' => 'required', 
        'description' => 'required', 
        'course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    // Handle file upload
    $imageName = time().'-'.$request->course_name.'-'.$request->course_image->extension(); 

    $request->course_image->move(public_path('images'), $imageName);
// public/images/file.png
    // dd($imageName);
    $course = CourseModel::create([
        'CourseName'=>$request->input('course_name'),
        'Description'=>$request->input('description'),
        'CourseImage'=>$imageName
    ]);
        return back()
                    ->with('success', 'You have successfully upload image.')
                    ->with('image', $imageName); 
    }
}

