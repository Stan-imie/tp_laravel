@extends('layouts.app')
@section('title', 'Page accueil')

@section('content')
    <h1 class="mt-3 mb-3">A la une sur Video Turfu :</h1>
    <div class="row">
        @foreach($arrayMovies as $movie)
        <div class="col-md-4 col-12">
            <article class="border border-primary row">
                <div class="col-6">
                    <header>
                        <h2><a href="{{ route('viewVideo', ['id' => $loop->iteration, 'name' => $movie['title']]) }}">{{ $movie['title'] }}</a></h2>
                    </header>
                    <section>
                        <p>{{ $movie['short_description'] }}</p>
                    </section>
                </div>
                <div class="col-6 mt-2">
                    <img src="{{ asset('img/'.$movie['img']) }}" class="img-fluid">
                </div>

            </article>
        </div>
        @endforeach
    </div>
@endsection