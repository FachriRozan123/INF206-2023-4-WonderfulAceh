<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Kategori</title>
</head>

<body>
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

</body>
</html>