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
        <style>
            .centeredform {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            label {
                color: white;
                font-size: 1.2rem;
                margin: 1rem 0;
            }

            input[type=radio] {
                display: none;
            }

            .radio-image {
                border: 4px solid white;
                border-radius: 10px;
                cursor: pointer;
                margin: 0.5rem;
                opacity: 0.7;
                transition: all 0.3s ease-in-out;
                filter: grayscale(100%);
            }

            .radio-image:hover {
                opacity: 1;
                border: 4px solid #5cb85c;
                filter: grayscale(0%);
            }

            input[type=radio]:checked+label .radio-image {
                opacity: 1;
                border: 4px solid #5cb85c;
                filter: grayscale(0%);
            }

            button {
                margin-top: 2rem;
                background-color: #5cb85c;
                border: none;
                border-radius: 5px;
                padding: 0.5rem 1rem;
                font-size: 1.2rem;
                color: white;
                cursor: pointer;
                transition: all 0.3s ease-in-out;
            }

            button:hover {
                background-color: #449d44;
            }

            img {
                width: 400px;
                height: 400px;
            }
        </style>
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
                        <input type="radio" name="answer1" value="{{ $category[0]->id }}" id="answer1_1">
                        <label for="answer1_1">
                            <img src="{{ $category[0]->image }}" class="radio-image" alt="{{ $category[0]->category }}">
                            <p class="caption">{{ $category[0]->category }}</p>
                        </label>
                        <input type="radio" name="answer1" value="{{ $category[1]->id }}" id="answer1_2">
                        <label for="answer1_2">
                            <img src="{{ $category[1]->image }}" class="radio-image" alt="{{ $category[1]->category }}">
                            <p class="caption">{{ $category[1]->category }}</p>
                        </label>
                        <br>
                        <label for="question2">Question 2: This or That?</label><br>
                        <input type="radio" name="answer2" value="{{ $category[2]->id }}" id="answer2_1"
                            class="radio-image">
                        <label  for="answer2_1">
                            <img src="{{ $category[2]->image }}" class="radio-image"
                                alt="{{ $category[2]->category }}">
                                <p class="caption">{{ $category[2]->category }}</p>
                        </label>
                        <input type="radio" name="answer2" value="{{ $category[3]->id }}" id="answer2_2"
                            class="radio-image">
                        <label  for="answer2_2">
                            <img src="{{ $category[3]->image }}" class="radio-image"
                                alt="{{ $category[3]->category }}">
                                <p class="caption">{{ $category[3]->category }}</p>
                        </label>
                        <br>

                        <label for="question3">Question 3: This or That?</label><br>
                        <input type="radio" name="answer3" value="{{ $category[4]->id }}" id="answer3_1"
                            class="radio-image">
                        <label  for="answer3_1">
                            <img src="{{ $category[4]->image }}" class="radio-image"
                                alt="{{ $category[4]->category }}">
                                <p class="caption">{{ $category[4]->category }}</p>
                        </label>
                        <input type="radio" name="answer3" value="{{ $category[5]->id }}" id="answer3_2"
                            class="radio-image">
                        <label for="answer3_2">
                            <img src="{{ $category[5]->image }}" class="radio-image"
                                alt="{{ $category[5]->category }}">
                                <p class="caption">{{ $category[5]->category }}</p>
                        </label>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
