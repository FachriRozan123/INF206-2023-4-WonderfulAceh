@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThisOrThat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>
<body>
    <main style=" background-color:#234741  !important;">
        <br>
        <br>
        <br>
        <div style="text-align: center;">
            <h1 style="font-size:3rem;color:white;">
                This Or That
            </h1>
            <br>
            <br>
            <div class="row" style="justify-content: center;">
                <div class="col" style="position: relative;left: 200px;">
                    <a href=".html" class="text-decoration-none">
                        <span
                            style="display: inline-block; height: 250px; width: 250px; background-color: white; border-radius: 100%; overflow: hidden;padding: 50px center;">
                            <img src="img/wisatahits.jpg" style="height: 100%; width: auto;">
                        </span>
                        <br>
                        <br>
                        <br>
                        <p class="text-white">
                            Pilihan 1
                        </p>
                    </a>
                </div>
                <div class="col">
                    <span style="padding: 0 150px 0 150px;border-top: 1px solid white;position: relative;top: 120px;">
                    </span>
                </div>

                <div class="col" style="position: relative;right: 200px;">
                    <span
                        style="display: inline-block; height: 250px; width: 250px; background-color: white; border-radius: 100%; overflow: hidden;padding: 50px center;">
                        <img src="img/pantai.jpg" style="height: 100%; width: 100%;">
                    </span>
                    <br>
                    <br>
                    <br>
                    <p class="text-white">
                        Pilihan 2
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>
    </main>
    
    <footer class="bg-white text-center">
        <p> Copyright 2023 &copy; WonderfulAceh</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection