

<x-dash-layout>

    <div class="text-center text-2xl font-semibold text-white">
        Welcome Back 
        <span class="text-yellow-500 text-3xl">
            {{auth()->user()->name}}
        </span>
    </div>
    <div class="mt-12 h-full grid grid-cols-1 sm:grid-cols-3 gap-8 ">
        <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
            <div>
            <span class="text-md font-semibold">- Admin - </span><i class="fa-solid fa-user-shield text-2xl text-red-500"></i>
            </div>
            <div class="font-semibold text-md">{{$admins}}</div>
        </div>
        <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
            <div>
                <span class="text-md font-semibold">- Artists - </span><i class="fa-solid fa-star text-2xl text-green-500"></i>
            </div>
            <div class="font-semibold text-md">{{$artists}}</div>
        </div>
        <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
            <div>
                <span class="text-md font-semibold">- Bands - </span><i class="fa-solid fa-hands-holding-child text-2xl text-yellow-400"></i>
            </div>
            <div class="font-semibold text-md">{{$bands}}</div>
        </div>
    </div>


</x-dash-layout>
