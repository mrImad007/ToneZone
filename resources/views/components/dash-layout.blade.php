
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('images/logo.png')}}"/>
    {{-- scrip of alpinjs for flash message --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Dashboard</title>
    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-700 to-black">

<div>

    <div class="overflow-hidden h-screen grid grid-cols-[auto_1fr] antialiased text-black ">

        <!-- Header -->
        <div class="fixed w-full max-sm:h-12 flex items-center justify-between text-white z-20">
            <div class="px-6 mb-2">
                <a href="/">
                    <div class="w-full flex justify-around items-center gap-4 p-2">
                        <img src="{{asset('images/logo.png')}}" alt="" class="w-12">
                        <h1 class="hidden md:block font-bold text-yellow-300 text-xl">MeloLibrary</h1>
                    </div>
                </a>
            </div>
            <div class="flex items-center justify-around w-4/6 relative">
                <form action="" class="w-4/6 relative flex">
                    <input type="search" name="search" class="rounded-full pl-4 py-2 w-full" placeholder="search">
                    <button class="bg-yellow-400 text-black font-semibold rounded-full px-4 absolute right-1 top-1/2 -translate-y-1/2 py-1 hover:bg-yellow-600"><i class="fa-solid fa-magnifying-glass text-md md:mr-2"></i><span class="hidden md:inline">Search</span></button>
                </form>
            </div>
            <div class="flex justify-between items-center h-full header-right">
                <ul class="flex items-center">
                    <li class="rounded-full border-2 border-blue-500 w-7 h-7 overflow-hidden">
                        <img src="{{asset('images/avatar.jpg')}}" alt="">
                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>
                    <li>
                        <a href="/logout" class="text-yellow-400 flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->
    
        <!-- Sidebar -->
        <x-dash-asidebar />
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 overflow-y-scroll scrollbar-hide px-4">

            {{$slot}}

        </div>
        <!-- ./body -->
    </div>
</div>

</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="{{asset('../js/delete.js')}}"></script>
</html>