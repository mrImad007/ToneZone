

<div class="text-white font-bold text-3xl mt-12 mb-6">
    <h3>Music</h3>
</div>


<div class="relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-400 border-b border-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Titre
                </th>
                <th scope="col" class="px-6 py-3">
                    Album
                </th>
                <th scope="col" class="px-6 py-3">
                    Creation Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Duration
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musics as $key => $music)
                <tr class="music bg-transparent hover:bg-gray-200/20 cursor-pointer">
                    <td class="musicId hidden">
                        {{$music->id}}
                    </td>
                    <td class="px-6">
                        {{$key + 1}}
                    </td>
                    <td class="flex gap-4 items-center font-bold text-white ">
                        <img src="{{$music->music_image}}" alt="{{$music->music_name}}" class="musicImg w-14">
                        <a href="/singleMusic/{{$music->id}}" class="title hover:underline">{{$music->music_name}}</a>
                    </td>
                    <td class="album px-6 font-semibold">
                        {{$music->artist_group}}
                    </td>
                    <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                        {{$music->created_at}}
                    </td>
                    <td class="duration px-6 text-center">
                        <div id="avatarButton" class=" elipsis"><i class="fa-solid fa-ellipsis text-xl text-gray-400 cursor-pointer hover:text-white"></i></div>                            <!-- Dropdown menu -->
                    </td>
                    <td class="hidden">
                        <audio controls src="{{$music->music_audio}}" class="audio"></audio>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


{{-- 
<div class="grid grid-cols-4 gap-4">
    @foreach ($musics as $music)
        <div id="music" class="allMusics bg-gray-600/30 flex flex-col gap-3 p-4 rounded-xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:bg-gray-600/60 ">
            <img id="musicImg" class="rounded-xl shadow-[0_0_15px] shadow-black object-fill" src="{{asset('storage/' . $music->music_image)}}" alt=""/>
            <div>
                <h2 class="text-white font-bold text-xl">{{$music->music_name}}</h2>
                <p class="text-gray-400">{{$music->artist_group}}</p>
            </div>
            <audio controls src="{{asset('storage/' . $music->music_audio)}}" hidden></audio>
        </div>
    @endforeach
</div> --}}

            <div class="absolute hidden" id="menu">
                <ul class="flex flex-col border border-gray-100 rounded bg-gray-50 ">
                    <li class="text-center font-semibold block py-2 px-4 text-white bg-gray-700 rounded ">
                        Add To Playlist
                    </li>
                    @auth
                        @foreach ($playlists as $playlist)
                            <li>
                                <a href="" id="{{$playlist->id}}" class="link block py-2 pl-3 pr-4 hover:bg-yellow-400  rounded">{{$playlist->name}}</a>
                            </li>
                        @endforeach
                    @endauth
                </ul>
            </div>


<div class="h-64"></div>

<script src="{{asset('js/handleDate.js')}}" defer></script>
<script src="{{asset('js/handleRightClick.js')}}" defer></script>