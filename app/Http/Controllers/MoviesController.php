<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Redirect;

use App\User;
use App\Genre;
use App\Roles;
use App\Movies;
use App\Ratings;
use App\CastCrew;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::paginate(10);
        return view('movies.index', [ 'movies' => $movies]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles            = Roles::all();
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
        $movie      = new Movies();
        
        $name          = $request->name;
        $release_year  = $request->release_year;
        $ticket_price  = $request->ticket_price;
        $image         = $request->image;
        $genre      = $request->genre;
        $description          = $request->description;
        $country       = $request->country;
        $films_id       = $request->films_id;

        $movie->name          = $name;
        $movie->release_year  = $release_year;
        $movie->ticket_price  = $ticket_price;
        $movie->image         = $image;
        $movie->genre      = $genre;
        $movie->description          =$description;
        $movie->country       = $country;
        $movie->films_id       = $films_id;

        $movie->save();

        return Redirect::to('movies')->with('message', 'New Movie added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie  = Movies::find($id);
        return view('movies.show', ['movie' => $movie ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie    = Movies::find($id);

        return view('movies.edit', [ 'movie' => $movie]);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie         = Movies::find($id);
        $name          = $request->name;
        $release_year  = $request->release_year;
        $ticket_price = $request->ticket_price;
        $image         = $request->image;
        $genre      = $request->genre;
        $description          = $request->description;
        $country       = $request->country;
        $films_id       = $request->films_id;

        $movie->name          = $name;
        $movie->release_year  = $release_year;
        $movie->ticket_price  = $ticket_price;

        if($image)
            $movie->image         = $image;
        
            $movie->genre      = $genre;

        if($country)
            $movie->country       = $country;
        
        if($description)
            $movie->description          =$description;
        
        if($films_id)
            $movie->films_id       = $films_id;

        $movie->save();


        return Redirect::to('movies')->with('message', 'Movie updated!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movies::find($id)->delete();
        return Redirect::to('movies')->with('message', 'Movie deleted!');
    }
}
