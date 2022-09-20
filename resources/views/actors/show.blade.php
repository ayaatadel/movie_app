@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row p-2">
            <img src="" alt="profile image" class="md:w-96 w-64">
            <div class="md:ml-24 show-color p-6">
                <h2 class="text-4xl font-semibold">WillSmith</h2>
                <div class="flex  flex-wrap items-center show-color mt-2">
                    <svg class="fill-current text-gray:500 w-6 " viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <span class="text-color ml-1 "> Stuff</span>
                    <span class="text-color ml-1">|</span>
                    <span class="text-color ml-1">More Stuff</span>
                    <span class="text-color ml-1 mr-2">|</span>


                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nam quis exercitationem magnam dolorem, ratione eligendi perferendis quisquam
                     delectus architecto dolores saepe
                    quidem voluptates officiis nulla magni neque laboriosam tenetur fugiat?
                </p>





            </div>
        </div>
    </div>
    {{-- <            end        > --}}
    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold  text-color">Credits</h2>

        </div>
    </div>


@endsection
