<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
 
    public function AddContent(){
        return view('creator.addcontent');
    }
    public function StoreContent(Request $request){
        dd($request->all());

//     $request->validate([
//         'course_name' => 'required', 
//         'description' => 'required', 
//         'course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);
//     // Handle file upload
//     $imageName = time().'-'.$request->course_name.'-'.$request->course_image->extension(); 

//     $request->course_image->move(public_path('images'), $imageName);
// // public/images/file.png
//     // dd($imageName);
//     $course = content::create([
//         'CourseName'=>$request->input('course_name'),
//         'Description'=>$request->input('description'),
//         'CourseImage'=>$imageName
//     ]);
//         return back()
//                     ->with('success', 'You have successfully upload image.')
//                     ->with('image', $imageName); 
    }
}

