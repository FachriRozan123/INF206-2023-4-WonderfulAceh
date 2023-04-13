<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nama Kategori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #2b6363;">
            <div class="container-fluid">
                <img src="img/logowondeful.png" style="height: 3%; width: 3%;">
                <a class="navbar-brand">Wonderful Aceh
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Daftar
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Tempat Wisata</a></li>
                                <li><a class="dropdown-item" href="#">Tour Guide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">This Or That</a>
                        </li>
                    </ul>
                    <form class="d-flex" style="margin-right: 20px;">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <li class="nav-item dropdown" style="margin-right:30px;">
                        <div style="position: relative; bottom:10px;" class="nav-link dropdown-toggle" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x me-2 text-white" style="list-style: none;"></i>
                            <span class="text-white" style="position: relative;bottom: px;"></span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
    </header>

    <main style=" background-color:#1f4847  !important;">
        <br>
        <br>
        <br>
        <p class="text-[#FFFFFF] ml-[59pt] text-[36px]">
        Nama Kategori
    </p>
    <div class="container mx-auto max-w-[1000pt] flex flex-col sm:flex-row h-[80pt] ">
        <div class="container max-w-[200pt] bg-[#908B8B] flex justify-center">
            <img class="scale-50" src="gallery.png">

        </div>
        <div class="container bg-[#C4C4C4] grid grid-cols-4 grid-rows-3 items-center">
            <div class="col-start-1 ml-10">Nama :</div>
            <div class="col-start-1 row-start-2 ml-10">Kategori :</div>
            <div class="col-start-1 row-start-3 ml-10">0.0/5.0 :</div>

        </div>
    </div>

    <div class="container mx-auto max-w-[1000pt] flex flex-col sm:flex-row h-[80pt] mt-[30pt]">
        <div class="container max-w-[200pt] bg-[#908B8B] flex justify-center">
            <img class="scale-50" src="gallery.png">
        </div>

        <div class="container bg-[#C4C4C4] grid grid-cols-4 grid-rows-3 items-center">
            <div class="col-start-1 ml-10">Nama :</div>
            <div class="col-start-1 row-start-2 ml-10">Kategori :</div>
            <div class="col-start-1 row-start-3 ml-10">0.0/5.0 :</div>
        </div>
    </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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