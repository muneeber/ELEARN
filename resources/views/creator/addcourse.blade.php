@extends('creator.layout');
@section('content')

    <div class="max-w-md mx-auto py-6 ">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Add Course</h1>
            <form action="{{ route('addcourse') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-input mt-1 block w-full" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="course_image" class="block text-sm font-medium text-gray-700">Course Image / Thumbnail</label>
                    <input type="file" name="course_image" id="course_image" class="form-input mt-1 block w-full" accept="image/*" required>
                </div>
                <div class="mt-6">
                    <button type="submit" class=" bg-blue-500 hover:bg-blue-600 text-black outline outline-blue-600 font-medium py-2 px-4 rounded-md">Add Course</button>
                </div>
            </form>
        </div>
    </div>


  @endsection