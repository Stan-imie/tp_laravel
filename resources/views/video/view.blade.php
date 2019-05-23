@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
    <article class="row">
        <div class="col-6">
            <header>
                <h1>{{ $movie['title'] }}</h1>
                <ul>
                    <li><small>Catégories : {{ $movie['categories'] }}</small></li>
                    <li><small>Réalisateur : {{ $movie['director'] }}</small></li>
                    <li><small>Date de sortie : {{ $movie['date'] }}</small></li>
                </ul>
            </header>
            <p>
                <button class="btn btn-info">Acheter</button>
            </p>
            <h2>Synopsis :</h2>
            <p>{{ $movie['synopsis'] }}</p>
        </div>
        <div class="col-6">
            <img src="{{ asset('img/'.$movie['img_affiche']) }}" class="img-fluid">
        </div>
    </article>

@endsection