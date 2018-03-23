<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('movies.index', ['movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $movie = Movie::create([
                'title' => $request->input('title'),
                'url' => $request->input('url'),
                'ratings' => doubleval($request->input('ratings')),
                'rating_count' => $request->input('rating-count'),
                'duration' => intval($request->input('duration')),
                'year' => $request->input('year'),
            ]);
            if($movie){   
                return redirect()->route('movies.show', ['movie'=> $movie->id])
                ->with('success' , 'Movie added successfully');
            }
        }
        
            return back()->withInput()->with('errors', 'Error in adding movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        if(Auth::check()){
            $movieUpdate = Movie::find($movie->id)
                            ->update([
                                'title' => $request->input('title'),
                                'url' => $request->input('url'),
                                'ratings' => doubleval($request->input('ratings')),
                                'rating_count' => $request->input('rating-count'),
                                'duration' => intval($request->input('duration')),
                                'year' => $request->input('year'),
                                ]);

            if($movieUpdate){   
                return redirect()->route('movies.show', ['movie'=> $movie->id])
                ->with('success' , 'Movie added successfully');
            }
         }
    
        return back()->withInput()->with('errors', 'Error in adding movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        if(Auth::check()){
            $movieDelete = Movie::find($movie->id);

            //redirect  
            if($movieDelete->delete()){
                return redirect()->route('movies.index')->with('success', "Movie succesfully deleted");
            }
        }

        return back()->withInput()->with('errors', 'Movie could not be deleted');
    }
}
