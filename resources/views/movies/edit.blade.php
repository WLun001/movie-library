@extends('layouts.app')

@section('content')

    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">

     <div class="row col-sm-12 col-md-12 col-lg-12" style="background:white; margin: 4px;">
     <form method="post" action="{{ route('movies.update', [$movie->id]) }}">
       {{ csrf_field() }}

        <!-- html form can only take 'get' and 'post' request, to do other than that, have to use hidden
        in this case is 'put' -->
       <input type="hidden" name="_method" value="put">

       <div class="form-group">
        <label for="title">Movie Title <span class="required">*</span></label>
        <input placeholder="Enter movie title"
                id="title"
                required
                name="title"
                spellcheck="false"
                class="form-control"
                value="{{ $movie->title }}"/>     
       </div>

       <div class="form-group">
        <label for="movie-content">Synopsis</label>
            <input placeholder="Enter Synopsis"
                    id="synopsis"
                    name="synopsis"
                    spellcheck="false"
                    class="form-control"
                    value="{{ $movie->synopsis }}">
            </input>     
       </div>

       <div class="form-group">
        <label for="movie-content">Genre</label>
            <input placeholder="Enter genre"
                    id="genre"
                    name="genre"
                    spellcheck="false"
                    class="form-control"
                    value="{{ $movie->genre }}">
            </input>     
       </div>

       <div class="form-group">
        <label for="movie-content">URL</label>
            <input placeholder="Enter URL"
                    id="url"
                    name="url"
                    spellcheck="false"
                    class="form-control"
                    value="{{ $movie->url }}">
            </input>     
       </div>

       <div class="col-md-3">
            <label for="ratings">Ratings</label>
            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Ratings"
                   value="{{ $movie->ratings }}">
        </div>

         <div class="col-md-3">
            <label for="ratings-count">Ratings Count</label>
            <input type="text" class="form-control" id="rating-count" name="rating-count" 
                   placeholder="Ratings Count" value="{{ $movie->rating_count }}">
        </div>

        <div class="col-md-3">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration" value="{{ $movie->duration }}">
        </div>

        <div class="col-md-3">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Movie year" value="{{ $movie->year }}">
        </div>
     
     <div class="form-group">
     <hr class="mb-10">
      <input type="submit" class="btn btn-primary" value="Submit"/>     
     </div>
    </form>
</div>

    </div>

      <!-- side bar -->
      <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
         <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
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