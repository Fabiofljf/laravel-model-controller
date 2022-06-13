@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        @section ('content')
        <h1>Hey ciao! Stampo a schermo i film</h1>
        <div class="movies">
            @foreach ($movies as $movie)
            <div class="card text-start">
              <div class="card-body">
                <h4 class="card-title">{{$movie->TItle}}</h4>
                <p class="card-text">Body</p>
              </div>
            </div>
            @endforeach
        </div>
        @endsection    
    </body>
</html>
