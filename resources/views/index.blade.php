@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider show-color text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach
            </div>
        </div>




        <div class="now-playing-movies py24">
            <h2 class="uppercase tracking-wider show-color text-lg font-semibold mt-5 px-4 pt-16 py-5 ">Playing
                Now</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"></x-movie-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection
