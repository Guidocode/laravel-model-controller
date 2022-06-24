@extends('layouts.main')

@section('title', 'Movies')

@section('content')


    <div class="movies">

        @foreach ($movies as $movie)
        <div class="card">
            <a href="#">
              <div class="img1"><img class="img-fluid" src="{{$movie->poster}}" alt="{{$movie->title}}"></div>
              <div class="img2"></div>
              <div class="title">{{$movie->title}}</div>
              <div class="text">{{$movie->original_title}}</div>
              <a href="#"><div class="catagory">Film <i class="fas fa-film"></i></div></a>
              <a href="#"><div class="views">{{$movie->vote}}  <i class="far fa-eye"></i> </div></a>
            </a>
        </div>
        @endforeach


    </div>


@endsection
