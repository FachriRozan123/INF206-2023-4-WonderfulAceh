@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#306A6A]">
    <p class="text-[#FFFFFF] ml-[100pt] text-[36px]">
        Rekomendasi untuk anda
    </p>
    <div class="container mx-auto max-w-[1000pt] flex flex-col sm:flex-row h-[80pt] ">
        <div class="container max-w-[200pt] bg-[#908B8B] flex justify-center">
            <img class="scale-50" src="img/gallery.png">

        </div>
        <div class="container bg-[#C4C4C4] grid grid-cols-4 grid-rows-3 items-center">
            <div class="col-start-1 ml-10">Nama :</div>
            <div class="col-start-1 row-start-2 ml-10">Kategori :</div>
            <div class="col-start-1 row-start-3 ml-10">0.0/5.0 :</div>

        </div>
    </div>

    <div class="container mx-auto max-w-[1000pt] flex flex-col sm:flex-row h-[80pt] mt-[30pt]">
        <div class="container max-w-[200pt] bg-[#908B8B] flex justify-center">
            <img class="scale-50" src="img/gallery.png">

        </div>
        <div class="container bg-[#C4C4C4] grid grid-cols-4 grid-rows-3 items-center">
            <div class="col-start-1 ml-10">Nama :</div>
            <div class="col-start-1 row-start-2 ml-10">Kategori :</div>
            <div class="col-start-1 row-start-3 ml-10">0.0/5.0 :</div>

        </div>
    </div>
   
</body>
</html>
@endsection