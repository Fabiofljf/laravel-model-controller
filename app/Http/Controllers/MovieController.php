<?php

namespace App\Http\Controllers;

// - questo è il model.
use App\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    // - Visto che è una lista (dei film) la chiamo lista.
    public function list(){
        // - all() è metodo statico con il quale prendiamo tutto ciò che si trova nella tabella movies.
        $movies = movie::all();
        //dd($movies);
        return view('movies.index', compact('movies'));
    }
}
