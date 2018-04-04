@extends('layouts.app')

@section('content')


    <script>

      function validation() {
        var title = document.forms['create-form']['title'].value;
        var synopsis = document.forms['create-form']['synopsis'].value;
        var genre = document.forms['create-form']['genre'].value;
        var imageUrl = document.forms['create-form']['image-url'].value;
        var url = document.forms['create-form']['url'].value;
        var ratings = document.forms['create-form']['ratings'].value;
        var ratingCount = document.forms['create-form']['rating-count'].value;
        var duration = document.forms['create-form']['duration'].value;
        var year = document.forms['create-form']['year'].value;
            
        if(title == "" || genre == "" || synopsis == "" || imageUrl =="" ||
          url == "" || ratings == "" || ratingCount == "" || duration == "" || year == "" ) {
            alert("Please complete all fields");
            return false;
        }
    }

    </script>


    <div class="col-sm-9 col-md-9 col-lg-9 pull-left">

     <div class="row col-sm-12 col-md-12 col-lg-12" style="background:white; margin: 4px;">
     <form name="create-form" method="post" action="{{ route('movies.store') }}" 
     onSubmit="return validation()" enctype="multipart/form-data">
       {{ csrf_field() }}

       <div class="form-group">
        <label for="title">Movie Title <span class="required">*</span></label>
        <input placeholder="Enter movie title"
                id="title"
                name="title"
                spellcheck="false"
                class="form-control"/>     
       </div>

      <div class="form-group">
        <label for="movie-content">Synopsis<span class="required">*</span></label>
            <input placeholder="Enter Synopsis"
                    id="synopsis"
                    name="synopsis"
                    spellcheck="false"
                    class="form-control">
            </input>     
       </div>

      <div class="form-group">
        <label for="movie-content">Genre<span class="required">*</span></label>
            <input placeholder="Enter genre"
                    id="genre"
                    name="genre"
                    spellcheck="false"
                    class="form-control">
            </input>     
       </div>

        <div class="form-group">
        <label for="movie-content">Image URL<span class="required">*</span></label>
            <input placeholder="Enter Image URL"
                    id="image-url"
                    name="image-url"
                    spellcheck="false"
                    class="form-control">
            </input>     
       </div>

       <div class="form-group">
        <label for="movie-content">URL<span class="required">*</span></label>
            <input placeholder="Enter URL"
                    id="url"
                    name="url"
                    spellcheck="false"
                    class="form-control">
            </input>     
       </div>

       <div class="col-md-3">
            <label for="ratings">Ratings<span class="required">*</span></label>
            <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Ratings">
        </div>

         <div class="col-md-3">
            <label for="ratings-count">Ratings Count<span class="required">*</span></label>
            <input type="text" class="form-control" id="rating-count" name="rating-count" placeholder="Ratings Count">
        </div>

        <div class="col-md-3">
            <label for="duration">Duration<span class="required">*</span></label>
            <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration">
        </div>

        <div class="col-md-3">
            <label for="year">Year<span class="required">*</span></label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Movie year">
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
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->

         <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/movies">List of Movies</a></li>
            </ol>
          </div>
        </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer>

@endsection 