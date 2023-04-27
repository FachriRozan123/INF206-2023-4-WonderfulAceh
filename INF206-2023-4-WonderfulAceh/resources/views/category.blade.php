<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" 
            style="background-color: #2b6363;">
            <div 
                class="container-fluid">
                <img src="img/logowondeful.png" 
                    style="height: 3%; width: 3%;">
                <a class="navbar-brand">Wonderful Aceh</a>
                <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" 
                    id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" 
                                href="#" id="navbarDropdown" 
                                role="button"
                                data-bs-toggle="dropdown" 
                                aria-expanded="false">Daftar
                            </a>
                            <ul class="dropdown-menu" 
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" 
                                    href="#">Tempat Wisata</a></li>
                                <li><a class="dropdown-item" 
                                    href="#">Tour Guide</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" 
                                aria-current="page" 
                                href="#">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" 
                                aria-current="page" 
                                href="#">This Or That</a>
                        </li>
                    </ul>
                    <form class="d-flex" 
                        style="margin-right: 20px;">
                        <input class="form-control me-2" 
                            type="search" placeholder="Search" 
                            aria-label="Search">
                        <button class="btn btn-outline-success" 
                            type="submit">Search</button>
                    </form>
                    <li class="nav-item dropdown" 
                        style="margin-right:30px;">
                        <div style="position: relative; bottom:10px;" 
                            class="nav-link dropdown-toggle" 
                            role="button"
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x me-2 text-white" 
                                style="list-style: none;"></i>
                            <span class="text-white" 
                                style="position: relative;bottom: px;"></span>
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
            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                <!--Card 1-->
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <img src="{{ url('img/mountain.jpg') }}" alt="Gunung">
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Gunung
                        </button>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>

                <!--Card 2-->
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <div class="h-30 w-30 bg-gray-200">
                    <img src="{{ url('img/sungai.jpeg') }}" class="h-full w-full object-cover" alt="Sungai">
                    </div>  
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Sungai
                        </button>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
                    </div>
                </div>

                <!--Card 3-->
                <div class="bg-white rounded overflow-hidden shadow-lg">
                    <div class="h-80 w-100 bg-gray-200">
                        <img src="{{ url('img/hutan.jpeg') }}" class="h-full w-full object-cover" alt="Hutan">
                    </div>  
                    <div class="px-6 py-4">
                        <button class="font-bold text-xl mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Hutan
                        </button>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white text-center pt-">
        <p> Copyright 2023 &copy; WonderfulAceh</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>
</html>