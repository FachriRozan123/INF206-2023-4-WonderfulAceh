@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Category</title>

    <style>
        body {
            background-color: #065f44
        }
        .card {
            border: none;
            border-radius: auto;
            padding: 10px;
            transition: 0.5s;
            cursor: pointer;
        }
        .card-text{
            height:auto;  
        }
        .card-title{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
        }
        .card-title i{  
            font-size:15px;
            transition:1s;
            cursor:pointer;
            color:#ffa710
        }
        .card-title :hover{
            transform: scale(1.25) rotate(100deg); 
            color:#18d4ca;
        }
        .card:hover{
            transform: scale(1.05);
            box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
        }
        .card::before, .card::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transform: scale3d(0, 0, 1);
            transition: transform .3s ease-out 0s;
            background: rgba(255, 255, 255, 0.1);
            content: '';
            pointer-events: none;
        }
        .card::before {
            transform-origin: left top;
        }
        .card::after {
            transform-origin: right bottom;
        }
        .card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
            transform: scale3d(1, 1, 1);
        }
        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            padding: auto;
            box-sizing: border-box;
            font-size: 16px;
        }

        @media screen and (max-width: 768px) {
            footer {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body position="center">
    <div class="container mt-2">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <h4 class="card-title text-center mt-3 mb-3"><i class="material-icons">Gunung</i></h4>
                <img src="img/mountain.jpg" style="background-position: center; width: 290px; height: 195px;">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <h4 class="card-title text-center mt-3 mb-3"><i class="material-icons">Sungai</i></h4>
                <img src="img/sungai.jpeg" style="background-position: center; width: 290px; height: 195px;">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <h4 class="card-title text-center mt-3 mb-3"><i class="material-icons">Hutan</i></h4>
                <img src="img/hutan.jpeg" style="background-position: center; width: 290px; height: 195px;">
            </div>
        </div> 
        <div class="col-md-3 col-sm-6">
            <div class="card card-block">
                <h4 class="card-title text-center mt-3 mb-3"><i class="material-icons">Pantai</i></h4>
                <img src="img/pantai.jpg" style="background-position: center; width: 290px; height: 195px;">
            </div>
        </div> 
    </div>
    </div>

    <footer class="bg-white bg-opacity-50 text-center bottom-full">
      <p>Copyright 2023 &copy; WonderfulAceh</p>
    </footer>
</body>
</html>
@endsection