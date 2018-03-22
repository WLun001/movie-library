 @if (session()->has('errors'))
    <div class="alert alert-danger">
        <ul>
            {{session('errors')}}
        </ul>
    </div>
@endif