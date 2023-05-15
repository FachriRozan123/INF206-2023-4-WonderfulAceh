@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.toursabang.co.id/wp-content/uploads/2022/03/pantai.gif">
    <title>Document</title>

    <style>
    body {
        background-image: url('https://www.toursabang.co.id/wp-content/uploads/2022/03/pantai.gif');
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
    .jelajahi-btn {
  background-color: teal;
  display: inline-block;
  padding: 12px 24px;
  border-radius: 30px;
  font-size: 18px;
  color: white;
  font-weight: bold;
  border: 2px solid #ccc;
  transition: color 0.3s;
}

.jelajahi-btn:hover {
  color: #5c9fbd;
}
  </style>
</head>

<body>
<div style="margin: 35px; font-size:24px; text-align: justify;">
  <p style="font-weight: bold; font-family: 'Merriweather'; color:black; font-size: 18px;"> 
    Selamat datang di Wonderful Aceh! 
    <br>Jelajahi keindahan alam dan budaya Aceh yang memukau. 
    <br>Nikmati pesona wisata yang tak tertandingi dengan pengalaman yang tak terlupakan. 
    <br>Temukan destinasi menakjubkan dan kenikmatan kuliner yang lezat.
    <br>
  </p>
  <button onclick="location.href='/register';" class="jelajahi-btn">Jelajahi Destinasi</button>
</div>

</html>
@endsection