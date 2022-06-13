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
  <h1 class="mb-5">Lista Films</h1>
  <div class="movies">
    <div class="container">
      <div class="row row-cols-3 p-2 g-3">
        @foreach ($movies as $movie)
        <div class="col">
          <div class="card text-start">
            <img src="{{$movie->thum}}" alt="">
            <div class="card-body">
              <h4 class="card-title">Title: {{$movie->title}}</h4>
              <p class="card-text">Description: {{$movie->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @endsection
</body>

</html>