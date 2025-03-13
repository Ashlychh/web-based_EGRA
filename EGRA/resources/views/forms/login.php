@extends('layout.header')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGRA - Login</title>
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

.btn {
    width: 30%;
    padding: 10px;
    background: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.forgot-password {
    display: block;
    margin-top: 10px;
    color: #007bff;
    text-decoration: none;
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
        <form action="{{route('login')}}">
        <div class="row border rounder-5 p-3 bg-white shadow box-area">
         
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box ">
                <div class="featured-image">
                    <img src="" class="img-fluid" >
                </div>
                <h1 class="text fs-2"> EGRA</h1>
                <p class="text text-wrap text-center" style="width: 17rem;">Welcome Teacher/Student!</p>

            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <p>LogIn</p>
                    </div>
               
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-lg bg-light" id="email" placeholder="Email" required>

                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-lg bg-light" id="password" placeholder="Password" required>

                    <button type="submit" class="btn">Sign In</button>
                    <a href="#" class="forgot-password">Forgot password?</a>
               
                </div>
            </div>
            
        </div>

    </main>
    @include('layout.footer')
    @endsection
   

</body>
</html>

   