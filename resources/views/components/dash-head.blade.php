

<div class="fixed w-full max-sm:h-12 flex items-center justify-between text-white z-20 bg-gray-900">
    <div class="px-6 mb-2">
        <div class="w-full flex justify-around items-center gap-4 p-2">
            <img src="{{asset('images/logo.png')}}" alt="" class="w-12">
            <h1 class="hidden md:block font-bold text-yellow-300 text-xl">MeloLibrary</h1>
        </div>
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
                <a href="/logout" class="text-white flex items-center mr-4 hover:text-blue-100">
                    <span class="inline-flex mr-1">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </span>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>