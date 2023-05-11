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
    <main style=" background-color:#1f4847  !important;">
        <br>
        <br>
        <br>
        <div style="text-align: center;">
            <form method="POST" action="/store-answer" class="centeredform">
                @csrf
            
                <div class="form-group">
                    <label for="question1">Question 1: This or That?</label><br>
                    <input type="radio" name="answer1" value="{{$category[0]->id}}">
                    <img src="{{$category[0]->image}}" style="height: 40%; width: 40%;" alt="{{$category[0]->category}}">
                    <br>
                    <input type="radio" name="answer1" value="{{$category[1]->id}}">
                    <img src="{{$category[1]->image}}"style="height: 40%; width: 40%;" alt="{{$category[1]->category}}">
                    <br>
                    <label for="question1">Question 2: This or That?</label><br>
                    <input type="radio" name="answer2" value="{{$category[2]->id}}">
                    <img src="{{$category[2]->image}}" style="height: 40%; width: 40%;" alt="{{$category[2]->category}}">
                    <br>
                    <input type="radio" name="answer2" value="{{$category[3]->id}}">
                    <img src="{{$category[3]->image}}"style="height: 40%; width: 40%;" alt="{{$category[3]->category}}">
                    <br> <label for="question1">Question 3: This or That?</label><br>
                    <input type="radio" name="answer3" value="{{$category[4]->id}}">
                    <img src="{{$category[4]->image}}"style="height: 40%; width: 40%;" alt="{{$category[4]->category}}">
                    <br>
                    <input type="radio" name="answer3" value="{{$category[5]->id}}">
                    <img src="{{$category[5]->image}}"style="height: 40%; width: 40%;" alt="{{$category[5]->category}}">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection