<div class="flex items-center">
    @auth
        <div  class="flex items-center gap-4">
            <span class="text-yellow-400 font-bold">Welcome back {{auth()->user()->name}}</span>
            <img src="{{asset('images/avatar.jpg')}}" alt="" class="w-[30px] rounded-full hover:border-yellow-400 hover:border-2">
            <form action="/logout">
                @csrf
                <button class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2">Log Out</button></a>
            </form>
        </div>
    @else
        <a href="/login"><button type="button" class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Login</button></a>
        <a href="/register"><button type="button" class="text-yellow-400 bg-none border-2 border-yellow-400 font-semibold hover:bg-yellow-400 hover:text-black rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Register</button></a>
    @endauth
</div>