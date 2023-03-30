
<nav class=" relative">
    <div class="col-span-1 row-span-3 bg-gray-900 pt-4 h-full fixed">
        <div class="px-6 mb-2">
            <div class="w-full flex justify-around items-center gap-4">
                <img src="{{asset('images/logo.png')}}" alt="" class="w-12">
                <h1 class="font-bold text-yellow-300 text-xl">__ToneZone__</h1>
            </div>
        </div>
        <div class="px-2 mb-2 mt-4">
            <ul class="text-gray-400">
                <a href="/">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-sm hover:text-yellow-400">
                        Home
                    </li>
                </a>
                <a href="/playlist">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-sm hover:text-yellow-400">
                        PlayLists
                    </li>
                </a>
                <a href="/album">
                    <li class=" flex font-semibold items-center px-4 py-2 rounded text-sm hover:text-yellow-400">
                        Albums
                    </li>
                </a>
            </ul>
        </div>
        <div>
            <hr class="border-gray-200 mx-6 mb-3" />
            <div class="mb-3">
                <div class="px-6 py-1 flex items-center text-sm text-white opacity-50 hover:opacity-100">
                    <a href="/createPlaylist" class="flex items-center">
                        <svg class="bg-white fill-current h-8 mr-4 p-1 text-black w-8" shape-rendering="crispEdges"
                            viewBox="0 0 36 36">
                            <path d="m28 20h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z"></path>
                        </svg>
                        Create Playlist
                    </a>
                </div>
                <div class="px-6 py-1 flex items-center text-sm text-white opacity-50 hover:opacity-100">
                    <a href="/createMusic" class="flex items-center">
                        <svg class="bg-white fill-current h-8 mr-4 p-1 text-black w-8" shape-rendering="crispEdges"
                            viewBox="0 0 36 36">
                            <path d="m28 20h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z"></path>
                        </svg>
                        Create Music
                    </a>
                </div>
                <div class="px-6 py-1 flex items-center text-sm text-white opacity-50 hover:opacity-100">
                    <svg class="bg-liked-songs fill-current h-8 mr-4 p-2 w-8" viewBox="0 0 20 20">
                        <path
                            d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                    </svg>
                    Liked Songs
                </div>
            </div>
            <hr class="border-gray-200 mx-6 mb-3" />
            <div class="px-6 mb-2 text-white h-40 overflow-y-scroll">
                <ul class="flex flex-col gap-2 ">
                    @foreach($playlists as $playlist)
                        <a href="/{{$playlist->name}}/{{$playlist->id}}"><li>{{$playlist->name}}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>