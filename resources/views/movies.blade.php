@extends('layouts.main')

@section('title', 'Movies');

@section('content')
    <h1>Movies</h1>

    <ul class="list-group">
        @foreach ($movies as $movie)

            <li class="list-group-item">
                <div><span>Id: </span>{{$movie->id}}</div>
                <div class="list-title"><span>Titolo: </span>{{$movie->title}}</div>
                <div><span>Titolo originale: </span>{{$movie->original_title}}</div>
                <div><span>Nazionalità: </span>{{$movie->nationality}}</div>
                <div><span>Data: </span>{{$movie->date}}</div>
                <div><span>Voto: </span>{{$movie->vote}}</div>
            </li>

        @endforeach

    </ul>



@endsection
