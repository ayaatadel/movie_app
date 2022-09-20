@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider show-color text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($popularActors as $actor)
                    <div class="actor mt-8 ">
                        <a href="{{route('actors.show',$actor['id'])}}">
                            <img src="{{ $actor['profile_path'] }}" alt="Actor profile image"
                                class="hover:opacity-75 transition ease-in-out duration-150 text-color ">
                        </a>

                        <div class="mt-2">
                            <a href="{{route('actors.show',$actor['id'])}}" class="text-lg text-color">{{ $actor['name'] }}</a>
                            <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> {{-- End popular actors --}}



        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last text-color">End of content</p>
            <p class="infinite-scroll-error text-color">Error</p>
        </div>
        {{-- <div class="flex justify-between mt-16 text-color ">

            @if ($previous)
                <a href='/actor/page/{{ $previous }}'>Previous</a>
            @else<div></div>
            @endif

            @if ($next)
                <a href="/actor/page/{{ $next }}">Next</a>
            @endif

        </div> --}}


    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        var elem = document.querySelector('.grid');
        console.log(elem);
        var infScroll = new InfiniteScroll(elem, {
            path: '/actor/page/@{{#}}',
            append: '.actor',
            status: '.page-load-status',
            // history: false,
        });
    </script>
@endsection
