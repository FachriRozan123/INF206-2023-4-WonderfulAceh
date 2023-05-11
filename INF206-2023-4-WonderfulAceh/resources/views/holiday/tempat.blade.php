@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tempat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- {{dd($tempat[0]->category->category);}}  --}}
    <main style=" background-color:#1f4847  !important;">
        <div style="text-align:left;">
            <h1 style="font-size:2rem;color:rgb(255, 255, 255); padding-left: 20px;">
                {{$tempat[0]->nama_tempat}}
            </h1>
             <div class="row" style="justify-content: center;">
                <div class="col" style="position: relative; left: 20px;">
                  <a  class="text-decoration-none">
                    <div
                      style="display: inline-block; height: 300px; width: 1420px; background-color: white; border-radius: 0%; overflow: hidden; padding: 6px;">
                      <a  class="text-decoration-none">
                          <img src="{{asset($tempat[0]->image)}}" style="height: 270px; width: 25%; margin-top: 10px;">
                          </a>
                          <div style="position: absolute; top: 40px; left: 27%; text-align: center;">
                            <h4>Nama:{{$tempat[0]->nama_tempat}}</h4>
                            <div style="position: absolute; top: 60px; text-align: center;">
                            <h4>Kategori:{{$tempat[0]->category->category}}</h4>
                            <div style="position: absolute; top: 60px; text-align: center;">
                            <h4>Deskripsi:{{$tempat[0]->deskripsi}}</h4>
                       </div>
                       </div>
                       </div>
                       </a>
                    </div>
                </div>
             </div>
        <div class="row" style="display: flex; justify-content: space-between;">
            <div class="col" style="position: relative; left: 20px;">
                <a href=".html" class="text-decoration-none">
                    <h1 style="font-size:2rem;color:rgb(255, 255, 255); padding-left: 2px;">
                        Pemilik Nama Tempat
                    </h1>
                    <div style="display: flex; height: 200px; width: 320px; background-color: rgb(255, 253, 253); border-radius: 0%; overflow: hidden; padding: 15px;">
                    <img src="/img/user.png" style="height: 110px; width: 40%;">
                    <h3 style="color: black;">{{$tempat[0]->nama_pemilik}}</h3>
                    <img src="/img/chat.png" style="height: 60px; width: 30%; margin-top: 100px;">
                </div>
                </a>
            </div>
            <div class="col" style="position: relative; margin-left: 750px; ">
                <a  class="text-decoration-none">
                    <h1 style="font-size:2rem;color:rgb(255, 255, 255); padding-left: 2px;">
                        Tour Guide
                    </h1>
                    <div style="display: flex; height: 200px; width: 320px; background-color: rgb(255, 253, 253); border-radius: 0%; overflow: hidden; padding: 15px;">
                        <img src="/img/user.png" style="height: 110px; width: 40%;">
                        <h3 style="color: black;">Nama</h3>
                        <img src="/img/chat.png" style="height: 60px; width: 30%; margin-top: 100px;">
                    </div>
                </a>
            </div>
        </a>
    </div>
</div>


        </div>
        </div>
        <br>
        <br>
        <br>
        
    
    </main>

    <footer class="bg-white text-center pt-">
        <p> Copyright 2023 &copy; WonderfulAceh</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection