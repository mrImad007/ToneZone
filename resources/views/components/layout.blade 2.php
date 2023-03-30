<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>

    {{-- load this flash messge after register succes --}}

    <!-- partial:index.partial.html -->
    <div class="grid grid-rows-3 grid-cols-6 h-screen">

        {{-- asidebar componenet --}}
        <x-asidebar :playlists="$playlists" />
        {{-- body --}}
        <main class="col-span-5 row-span-3 bg-black ml-2 overflow-y-scroll">
            {{-- header of body --}}
            <header class="px-6 py-4 bg-gray-900/80 flex items-center justify-between sticky top-0 z-10 fixed">
                {{-- include the search bar --}}
                @include('partials._search')
                <div class="flex items-center">
                    @auth
                        <div  class="flex items-center gap-4">
                            <span class="text-yellow-400 font-bold">Welcome back {{auth()->user()->name}}</span>
                            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" src="{{asset('images/avatar.jpg')}}" alt="" class="cursor-pointer w-[30px] rounded-full hover:border-yellow-400 hover:border-2">
                            <!-- Dropdown menu -->
                            <div id="userDropdown" class="bg-gray-800 hidden z-10 w-44 text-white rounded border border-gray-700 divide-y divide-gray-100 shadow">
                                <ul class="py-1 text-sm " aria-labelledby="avatarButton">   
                                    <li>
                                        <a href="/admin/dashboard" class="block py-2 px-4 hover:bg-yellow-400 hover:text-black ">Dashboard</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="/logout" class="block py-2 px-4 text-sm hover:bg-gray-100 hover:bg-yellow-400 hover:text-black ">Logout</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="/login"><button type="button" class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Login</button></a>
                        <a href="/register"><button type="button" class="text-yellow-400 bg-none font-semibold hover:bg-yellow-400 hover:text-black rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Register</button></a>
                    @endauth
                </div>
            </header>


            {{$slot}}

        </main>
        
        {{-- footer components --}}
        <x-footer />

    </div>
    <!-- partial -->

</body>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="js/handleMusic.js" defer></script>
    <script src="js/handleUpladFile.js" defer></script>
</html>