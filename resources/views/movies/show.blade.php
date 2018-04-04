@extends('layouts.app')

@section('content')

    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">
      <div class="jumbotron">
        <img src="{{ $movie->image_url }}">
        <h1>{{ $movie->title }}</h1>
        <p class="lead">Synopsis: {{ $movie->synopsis }}</p>
        <p class="lead">Genre: {{ $movie->genre }}</p>
        <p class="lead">URL: <a href="{{ $movie->url }}">{{ $movie->url }}</a></p>
        <p class="lead">Ratings: {{ $movie->ratings }}</p>
        <p class="lead">Ratings Count: {{ $movie->rating_count }}</p>
        <p class="lead">Duration: {{ $movie->duration }}</p>
        <p class="lead">Year: {{ $movie->year }}</p>
      </div>

      <div class="row" style="background:white; margin: 4px;">
        
      </div>
    </div>

      <!-- side bar -->
      <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
         <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/movies/{{ $movie->id }}/edit">Edit Movie</a></li>
              <li><a href="/movies/create">Add Movie</a></li>
              <li><a href="/movies">List of Movies</a></li>
              <li>
               <a href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this project?');
                    if(result){
                       event.preventDefault();
                       document.getElementById('delete-form').submit();
                    }">Delete Movie</a>
              <form id="delete-form" action="{{ route('movies.destroy', [$movie->id]) }}"
                    method="post" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
              </form>
              </li>
            </ol>
          </div>
        </div>


      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

@endsection 