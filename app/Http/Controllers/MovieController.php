<?php

namespace App\Http\Controllers;

use App\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function Movie(){
        $movies = movie::all();
        dd($movies);
        return view('index');
    }
}
