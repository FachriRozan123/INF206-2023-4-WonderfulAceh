@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tempat</title>
    <!-- Bootstrap CDN Links -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/348c676099.js"
      crossorigin="anonymous"
    ></script>
  </head>
  
  <body>
  <main class="w-screen h-screen p-5" style="background-color: #234741">
    <p class="text-white ml-[100pt] text-xl font-bold font-serif p-2">
        Rekomendasi untuk Anda adalah
    </p>
    @foreach ($tempat1 as $item)
    <a href="{{'/tempat/'.$item->slug}}">
    <div class="card mb-3" style="max-width: 100%">
      <div class="row">
        <div class="col-auto">
          <img
            src="{{asset($item->image)}}"
            class="img-fluid rounded-start"
            alt="Foto error"
            style="background-position: center; width: 280px; height: 180px;"
          />
        </div>
        <div class="col">
          <div class="card-body">
            <h5 class="card-title">Nama: {{$item->nama_tempat}}</h5>
            <h5 class="card-title">Kategori: {{$item->category->category}}</h5>
          </div>
        </div>
      </div>
    </a>
      @endforeach
      @foreach ($tempat2 as $item)
      <a href="{{'/tempat/'.$item->slug}}">
      <div class="card mb-3" style="max-width: 100%">
        <div class="row">
          <div class="col-auto">
            <img
              src="{{asset($item->image)}}"
              class="img-fluid rounded-start"
              alt="Foto error"
              style="background-position: center; width: 280px; height: 180px;"
            />
          </div>
          <div class="col">
            <div class="card-body">
              <h5 class="card-title">Nama: {{$item->nama_tempat}}</h5>
              <h5 class="card-title">Kategori: {{$item->category->category}}</h5>
            </div>
          </div>
        </div>
      </a>
        @endforeach
        @foreach ($tempat3 as $item)
        <a href="{{'/tempat/'.$item->slug}}">
        <div class="card mb-3" style="max-width: 100%">
          <div class="row">
            <div class="col-auto">
              <img
                src="{{asset($item->image)}}"
                class="img-fluid rounded-start"
                alt="Foto error"
                style="background-position: center; width: 280px; height: 180px;"
              />
            </div>
            <div class="col">
              <div class="card-body">
                <h5 class="card-title">Nama: {{$item->nama_tempat}}</h5>
                <h5 class="card-title">Kategori: {{$item->category->category}}</h5>
              </div>
            </div>
          </div>
        </a>
          @endforeach
    </div>
    </div>
  </main>
  <footer class="bg-white bg-opacity-50 text-center bottom-full">
    <p>Copyright 2023 &copy; WonderfulAceh</p>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
  ></script>
  </body>
</html>
@endsection