@extends('layout.header')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGRA - Login</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  
    <main class="container" >

        <div class="row border rounder-5 p-3 bg-white shadow box-area">

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box ">
                <div class="featured-image">
                    <img src="" class="img-fluid" style="width: 250px;">
                </div>
                <h1 class="text fs-2"> EGRA</h1>
                <p class="text text-wrap text-center" style="width: 17rem;">Welcome Teacher/Student!</p>

            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <p>LogIn</p>
                    </div>
               
                <form>
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-lg bg-light" id="email" placeholder="Email" required>

                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-lg bg-light" id="password" placeholder="Password" required>

                    <button type="submit" class="btn">Sign In</button>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </form>
                </div>
            </div>

        </div>

    </main>
    @include('layout.footer')
    @endsection
   

</body>
</html>

   