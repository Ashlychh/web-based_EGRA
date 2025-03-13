@extends('layout.header')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGRA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  
    <main class="container" >
        <div class="row border rounder-5 p-3 bg-white shadow box-area" style="margin-top:10px">

            <div class="container rounded-4 d-flex justify-content-center align-items-center flex-column">
                <div class="featured-image">
                    <img src="" class="img-fluid" style="width: 250px;">
                </div>
                <h1>EGRA</h1>
                <p class="text text-wrap text-center">Welcome Teacher/Student!</p>

            </div>

        
        </div>

    </main>
    @include('layout.footer')
    @endsection
   

</body>
</html>

   