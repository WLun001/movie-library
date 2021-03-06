@extends('layouts.app')

@section('content')
<div class="btn-group" role="group" aria-label="Basic example">
  <a class="btn btn-primary btn-sm" href="/movies/sort/{{'genre'}}">By Genre</a>
  <a class="btn btn-primary btn-sm" href="/movies/sort/{{'title'}}">By Title</a>
  <a class="btn btn-primary btn-sm" href="/movies/sort/{{'year'}}">By Year</a>
</div>

<div class="col-md-6 col-lg-6 col-md-offset-3  col-lg-offset-3">
  <div class="panel panel-primary">  
  <div class="panel-heading">Movies
  @if(Auth::check())
  <a class="pull-right btn btn-primary btn-sm" href="/movies/create">Add New Movie</a></div>
  @endif
    <div class="panel-body">
      <ul class="list-group">
      @foreach($movies as $movie)
      <li class="list-group-item">
       <a href="/movies/{{ $movie->id }}" style="align-text:left">{{ $movie->title }} ({{ $movie->year }})</a> 
        <div style="align-text:right">{{$movie->genre}}</div>       
      </li>
      @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
