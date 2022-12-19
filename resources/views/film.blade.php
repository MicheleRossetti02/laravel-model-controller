@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5">Welcome</h1>

    <div class="row row-cols-md-3 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    @if($movie->title == $movie->original_title)
                    <h3>{{$movie->title}}</h3>
                    @else
                    <div class="title">
                        <h3>{{$movie->title}}</h3>
                        <span>{{$movie->original_title}}</span>
                    </div>
                    @endif

                    <p>{{$movie->nationality}}</p>
                    <div class="info">
                        <span>{{$movie->date}}</span>
                        <p>{{$movie->vote}}</p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>NO FILM</p>
        </div>
        @endforelse
    </div>
</div>

@endsection