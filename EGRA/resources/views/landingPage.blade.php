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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    height: 70vh;
}

.row{
    border: none;
    background-color:   white;
    width: 930px;
    margin-top: 50px;

}
h1 {
    color: #028897;
    font-size: 2rem;
    font-weight: 700;
}

.hero p {
    font-size: 1.2rem;
    font-family:sans-serif;
}

.btn {
    width: 100%;
    padding: 10px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}




@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }
}

</style>
</head>
<body>
  
    <main class="container" >

            <div class="container rounded-4 d-flex justify-content-center align-items-center flex-column">
                <div class="featured-image">
                </div>
                <h1>EGRA</h1>
                <p class="text text-wrap text-center">Welcome Teacher/Student!</p>

            </div>

        
      
    </main>
    @include('layout.footer')
    @endsection
   

</body>
</html>

   