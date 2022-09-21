@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider show-color text-lg font-semibold">Popular Tv Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTv as $tvShow)
                    <x-tv-card :tvShow="$tvShow"></x-tv-card>
                @endforeach
            </div>
        </div> {{-- <<< end popular tv >>> --}}
        <div class="now-playing-movies py24">
            <h2 class="uppercase tracking-wider show-color text-lg font-semibold mt-5 px-4 pt-16 py-5 ">
                Top Rated Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedShows as $tvShow)
                    <x-tv-card :tvShow="$tvShow"></x-tv-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection
