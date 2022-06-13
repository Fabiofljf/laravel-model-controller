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
    <h1 class="p-5">Hey ciao! Benvenuto</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="p-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta atque laboriosam, magni provident, unde voluptates veniam quaerat quidem culpa et exercitationem natus debitis deserunt. Error numquam optio qui delectus temporibus consequuntur, sed sequi incidunt nam doloremque iste voluptates dolore quidem fuga assumenda odio et! Nulla inventore distinctio quam similique officiis eveniet? Alias eaque esse dicta sequi? Excepturi porro doloremque magnam beatae, error esse reprehenderit eius natus iure cupiditate maiores consectetur nesciunt adipisci dolore exercitationem laboriosam culpa aliquam suscipit quo architecto itaque voluptatem. Sit, quas nulla impedit possimus porro, quos ipsa numquam recusandae, ducimus consequuntur quia! Excepturi sunt maxime soluta eum?
                </p>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>