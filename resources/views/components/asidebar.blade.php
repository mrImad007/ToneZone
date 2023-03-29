
<nav class="relative">
    <div class="col-span-1 bg-black row-span-3 pt-4 h-full fixed">
        <div class="px-6 mb-2">
            <a href="/" class="w-full flex justify-around items-center gap-4">
                <img src="{{asset('images/logo.png')}}" alt="" class="w-10">
                <h1 class="font-bold text-yellow-300 text-xl hidden md:block">MeloLibrary</h1>
            </a>
        </div>
        <div class="px-2 mb-4 mt-6">
            <ul class="text-gray-400">
                <a href="/">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-md hover:text-yellow-400">
                        <i class="fa-solid fa-house mr-2"></i> <span class="hidden md:block"> Home</span>
                    </li>
                </a>
                <a href="/playlist">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-md hover:text-yellow-400">
                        <i class="fa-solid fa-list mr-2"></i><span class="hidden md:block">PlayList</span>
                    </li>
                </a>
                <a href="/artist">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-md hover:text-yellow-400">
                        <i class="fa-solid fa-users mr-2"></i><span class="hidden md:block">Artist</span>
                    </li>
                </a>
            </ul>
        </div>
        <div>
            <hr class="border-gray-600 mx-6 mb-4" />
            <div class="mb-3">
                <div class="px-6 py-2 flex items-center text-sm text-gray-400 hover:text-yellow-400 group">
                    <a href="/createPlaylist" class="flex items-center">
                        <i class="fa-solid fa-plus p-1 mr-2 bg-gray-400 text-black group-hover:bg-yellow-400"></i>
                        <span class="hidden md:block" title="Create Playlist">Create Playlist</span>
                    </a>
                </div>
                <div class="px-6 py-2 flex items-center text-sm text-gray-400 hover:text-yellow-400">
                    <a href="/likedmusic" class="flex items-center">
                        <i class="fa-solid fa-heart text-xl mr-4"></i>
                        <span class="hidden md:block" title="Liked Songs">Liked Songs</span>
                    </a>
                </div>
            </div>
            <hr class="border-gray-600 mx-6 mb-3" />
            <div class="px-6 mb-2 text-white h-40 overflow-y-scroll scrollbar-hide">
                <ul class="flex flex-col gap-2 ">   
                    @auth   
                        @if ($playlists)    
                            @foreach($playlists as $playlist)
                                <a href="/playlist/{{$playlist->id}}"><li>{{$playlist->name}}</li></a>
                            @endforeach
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>