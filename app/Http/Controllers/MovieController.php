<?php

namespace App\Http\Controllers;

// - questo è il model.
use App\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function Movie(){
        // - all() è metodo statico con il quale prendiamo tutto ciò che si trova nella tabella movies.
        $movies = movie::all();
        dd($movies);
        return view('index');
    }
}
