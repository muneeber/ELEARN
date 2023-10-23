@extends('creator.layout');
@section('content')

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    {{-- Main Content div --}}
    <form action="{{ route('AddContent') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="grid grid-cols-4 grid-rows-1 mt-3 p-3 bg-[#F5F5F5] gap-4">
        <div class="col-span-3 ">
            <div class="relative flex items-center flex-col gap-2  justify-center overflow-hidden rounded-lg bg-gray-300 h-96">
                <h2 class="text-center font-bold text-2xl text-green-500">Upload Your Course Cover Photo Here </h2>
                <input type="file" name="course_image" id="course_image" name="Image-course-cover" class="form-input mt-1 block  " accept="image/*"
                    required>
            </div>
            <div class="bg-white mt-1 w-full p-3 ">

                <div class="grid grid-cols-4 grid-rows-2 gap-4">
                    <div class="row-span-2 flex justify-center items-center h-16 w-16">
                        <img src="data:image/png;base64,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"
                            alt="">
                    </div>
                    <div>$Instructor Name</div>
                    <div>Catogary</div>
                    <div>$num_rewies .Reviews:</div>
                    <div class="col-start-2">Sr. Instructor</div>
                    <div class="col-start-3">$catogary</div>
                    <div class="col-start-4">$stars</div>
                </div>

            </div>
            {{-- Acoordation --}}
            <div class="p-5 ">
                <div class="">
                    <h1 class="text-[#001920] text-4xl font-extrabold mb-5   ">
                        Overview
                    </h1>
                    
                    <textarea class="w-full" name="" id="" cols="30" rows="10">
                      Enter the Description about your course.
                    </textarea>
                </div>

                <div class="mt-10 ">
                  <div class="flex justify-between items-center">
                    <h2 class="text-2xl mb-6 font-bold">Course Content</h2>
                    <div class="">
                    <button type="button" id="add-s"
                                class="text-white flex capitalize bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                add Another Chapter
                            </button></div></div>

                    <div id="section-list">
                      <div id="section-1" class="main">
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <div type="button" id="button"
                                    class="flex items-center outline outline-1 outline-black justify-between w-full p-5 font-lg font-bold text-left text-black  "
                                    data-accordion-target="#accordion-collapse-b  ody-2" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>   <input type="text" placeholder="Enter Your Chapter Name:" size="30" class="w-full"></span>
                                    <button type="button" id="add-field"
                                    class="text-white flex capitalize bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    add Another Field
                                </button>
                                  </div>
                            </h2>
                            <div id="accordion-collapse-body-2" 
                                aria-labelledby="accordion-collapse-heading-1">
                                <div class="border border-1 border-black">
                                    <ul id="field-list">
                                        <li class="flex items-center py-2 px-4 bg-[#fff] justify-between"
                                            style="transition: background-color 300ms ease-in;">
                                            <div class="flex items-center gap-2">
                                             Upload Content :<input type="file" class=" w-60" name="course_image" id="course_image" class="form-input
                                              mt-1 block  " name="course-content-1-ch-1" 
                                              accept="video/*" required>
                                              <input type="text" name="" size="20" id="" placeholder="Enter Your Video Title">
                                            </div>
                                            <div class="flex items-center gap-2">
                                                
                                               
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <head>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>
        {{-- SIDEBAR --}}
        <div id="sidebar" class="border">
            <div class=" flex w-full flex-col bg-white p-5 rounded    ">
                <div class=" flex flex-col justify-center items-center border border-1 border-black p-3 overflow-hidden">
                    <h2 class="text-center text-xl text-amber-500 font-blod block">Upload Your Couse Demo Video Here</h2>
                    <input type="file"  name="course-demo" id="course_image" class="form-input my-2 h-11 w-60"
                        accept="video/*" required>
                </div>
                <div class="">
                    <h2 class=" mt-5 mb-5 text-[#001920] font-serif font-bold text-lg">Course Pricing</h2>
                    <h1 class=" mb-5 text-[#FF3158] font-serif  font-extrabold text-4xl">Free</h1>
                </div>
                <div class="">
                    <div class="flex items-center justify-between">
                        <h2 class=" mb-5 text-[#001920] text-2xl font-extrabold ">Course Features</h2>
                        <div class="">
                            <button type="button" id="add-f"
                                class="text-white flex capitalize bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                add feature
                            </button>
                        </div>
                    </div>
                    <h3>

                        <ol id="feature-list">
                            <li class="mb-2  flex gap-1 items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#FF3158" height="1em" viewBox="0 0 512 512">
                                    <path
                                        d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>
                                <input type="text" class="outline outline-1 outline-blue-500" placeholder="Enter Feature"
                                    name="feature-1" id="feature-1">

                            </li>
                        </ol>
                    </h3>
                </div>
                <button
                    class="rounded  p-4 bg-green-600 px-6 py-2 text-lg font-extrabold text-white  focus:outline-none " type="submit"> Submit Content</button>
            </div>
        </div>
        <script>
            // jQuery code to add a new feature input when the button is clicked
            $(document).ready(function() {
                $("#add-f").click(function() {
                    const featureList = $("#feature-list");
                    const featureCount = featureList.find("li").length + 1;
                    const newFeatureInput = $(
                        "<li class='mb-2 flex gap-1 items-center'><svg xmlns='http://www.w3.org/2000/svg' fill='#FF3158' height='1em' viewBox='0 0 512 512'><path d='M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z'></path></svg><input type='text' placeholder='Enter Feature " +
                        featureCount + "' name='feature-" + featureCount + "' id='feature-" + featureCount +
                        "'><button class='bg-red-500 rounded p-2 text-white delete-button'>Delete</button></li>"
                        );
                    featureList.append(newFeatureInput);
                });
                $("#add-s").click(function() {
                    const featureList = $("#section-list");
                    const featureCount = featureList.find(".main").length + 1;
                    const newFeatureInput = $(
                      `<div id="section-`+featureCount+`" class="mt-3 main">
                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <div type="button" id="button"
                                    class="flex items-center outline outline-1 outline-black justify-between w-full p-5 font-lg font-bold text-left text-black  "
                                    data-accordion-target="#accordion-collapse-b  ody-2" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>   <input type="text" placeholder="Enter Your Chapter Name:" size="30" class="w-full"></span>
                                    <button type="button" id="add-field"
                                    class="text-white flex capitalize bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    add Another Field
                                </button>
                                    <button type="button" id=""
                            class="text-white delete-section flex capitalize bg-red-600 hover:bg-red-800 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            Delete
                        </button>
                                  </div>
                            </h2>
                            <div id="accordion-collapse-body-2" 
                                aria-labelledby="accordion-collapse-heading-1">
                                <div class="border border-1 border-black">
                                    <ul>
                                        <li class="flex items-center py-2 px-4 bg-[#fff] justify-between"
                                            style="transition: background-color 300ms ease-in;">
                                            <div class="flex items-center gap-2">
                                             Upload Video :<input type="file" name="course_image" id="course_image" class="form-input mt-1 block  "
                                              accept="video/*" required>
                                              <input type="text" name="" size="50" id="" placeholder="Enter Your Video Title">
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <div class="">07:00</div>
                                                <div class="mb-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM8.711,4.3l5.7,5.766L8.7,15.711,7.3,14.289l4.289-4.242L7.289,5.7Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Repeat the above structure for other sections -->
                        </div>`
                        );
                    featureList.append(newFeatureInput);
                });
                $("#add-field").click(function() {
                    const featureList = $("#field-list");
                    const featureCount = featureList.find("li").length + 1;
                    const newFeatureInput = $(`
                    <li class="flex items-center py-2 px-4 bg-[#fff] justify-between"
                                            style="transition: background-color 300ms ease-in;">
                                            <div class="flex items-center gap-2">
                                             Upload Content :<input type="file" class=" w-60" name="course_image" id="course_image" class="form-input mt-1 block  "
                                              accept="video/*" required>
                                              <input type="text" name="" size="20" id="" placeholder="Enter Your Video Title">
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <button class="px-2 delete-field p-1 mx-2 bg-red-500 text-white outline rounded outline-red-800">Delete</button>
                                                
                                            </div>
                                        </li>
                    `);
                    console.log('add field Section');
                    featureList.append(newFeatureInput);
                });

                // Add a click event handler for the delete button
                $(document).on("click", ".delete-button", function() {
                    $(this).closest("li").remove();
                });
                $(document).on("click", ".delete-section", function() {
                    console.log('Delete Section');
                    $(this).closest(".main").remove();
                });
                $(document).on("click", ".delete-field", function() {
                    console.log('Delete field');
                    $(this).closest("li").remove();
                });
            });
        </script>


    </div>

    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <footer class="text-white bg-gray-800 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <p class="mt-2 text-sm ">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium  tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="">First Link</a>
                        </li>
                        <li>
                            <a class="    ">Second Link</a>
                        </li>
                        <li>
                            <a class="    ">Third Link</a>
                        </li>
                        <li>
                            <a class="    ">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="    ">First Link</a>
                        </li>
                        <li>
                            <a class="    ">Second Link</a>
                        </li>
                        <li>
                            <a class="    ">Third Link</a>
                        </li>
                        <li>
                            <a class="    ">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="    ">First Link</a>
                        </li>
                        <li>
                            <a class="    ">Second Link</a>
                        </li>
                        <li>
                            <a class="    ">Third Link</a>
                        </li>
                        <li>
                            <a class="    ">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="    ">First Link</a>
                        </li>
                        <li>
                            <a class="    ">Second Link</a>
                        </li>
                        <li>
                            <a class="    ">Third Link</a>
                        </li>
                        <li>
                            <a class="    ">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-800">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class=" text-white text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="  ml-1"
                        target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class=" text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3  text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3  text-white">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3  text-white">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll('[data-accordion-target]');
            accordionItems.forEach(item => {
                const targetId = item.getAttribute('data-accordion-target');
                const target = document.querySelector(targetId);
                item.addEventListener('click', () => {
                    target.classList.toggle('hidden');
                    const expanded = item.getAttribute('aria-expanded') === 'true' ? 'false' :
                        'true';
                    button.setAttribute('aria-expanded', expanded);
                });
            });
        });
    </script>
    {{-- Footer --}}
</form>
@endsection
{{-- <button type="button" id=""
                                class="text-white flex capitalize bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                add Another Chapter
                            </button> --}}