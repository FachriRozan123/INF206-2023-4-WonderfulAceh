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
    <main style="background-color:#1f4847 !important;">
        <div style="text-align:left;">
            <h1 style="font-size:2rem;color:rgb(255, 255, 255); padding-left: 20px;">
                {{ $tempat[0]->nama_tempat }}
            </h1>
            <div class="row" style="justify-content: center;">
                <div class="col" style="position: relative; ">
                    <a class="text-decoration-none">
                        <div style="display: flex; height: 300px; width: 1420px; background-color: white; border-radius: 0%; overflow: hidden; padding: 6px;">
                            <a class="text-decoration-none" style="flex: 1;">
                                <img src="{{ asset($tempat[0]->image) }}" style="height: 280px; max-width: 50%; margin-top: 4px; position:center;">
                            </a>
                            <div style="flex: 1; position: relative; right: 400px;  text-align: left; margin-right: -250px; ">
                                <br>
                                <h4>Nama: {{ $tempat[0]->nama_tempat }}</h4>
                                <h4>Kategori: {{ $tempat[0]->category->category }}</h4>
                                <h4>Deskripsi: {{ $tempat[0]->deskripsi }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>


            <br>
            <div class="row" style="display: flex; justify-content: space-between;">
                <div class="col" style="position: relative; left: 20px;">
                    <a class="text-decoration-none">
                        <h1 style="font-size: 2rem; color: rgb(255, 255, 255); padding-left: 2px;">Pemilik Tempat</h1>
                        <div style="display: flex; align-items: center; height: 200px; width: 320px; background-color: rgb(255, 253, 253); border-radius: 0%; overflow: hidden; padding: 15px;">
                            <img src="/img/user.png" style="height: 110px; width: 40%;">
                            <div style="margin-left: 20px;">
                                <h3 style="color: black;">{{ $tempat[0]->nama_pemilik }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                <img src="/img/chat.png" style="height: 60px; width: 30%; margin-top: 10px;">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col" style="position: relative; margin-left: auto; right: -450px;">
                    <a class="text-decoration-none">
                        <h1 style="font-size: 2rem; color: rgb(255, 255, 255); padding-left: 2px;">Tour Guide</h1>
                        <div style="display: flex; align-items: center; height: 200px; width: 320px; background-color: rgb(255, 253, 253); border-radius: 0%; overflow: hidden; padding: 15px;">
                            <img src="/img/user.png" style="height: 110px; width: 40%;">
                            <div style="margin-left: 20px;">
                                <h3 style="color: black;">Personal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                <img src="/img/chat.png" style="height: 60px; width: 30%; margin-top: 10px;">
                            </div>
                        </div>
                    </a>
                </div>                
            </div>            
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection