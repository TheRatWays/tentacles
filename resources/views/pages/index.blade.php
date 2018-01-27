@extends('layouts.base')

@section('title', 'Home -')

@section('content')
    <div class="sectionWrapper">
        <h2 class="title">Recent Videos</h2>

        @if(count($videos) > 0)
            <ul class="videos">
                @foreach($videos as $video)
                    <li class="video-item">
                        <a class="video-link" href="{{ $video }}">
                            <!-- <img src=""> -->
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection