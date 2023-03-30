

<div class="text-white font-bold text-3xl mt-12 mb-6">
    <h3>My Music</h3>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
            @foreach ($musics as $music)
                <tr class="music bg-transparent hover:bg-gray-200/20 cursor-pointer">
                    <td class="px-6">
                        {{$music->id}}
                    </td>
                    <td class="flex gap-4 items-center font-bold text-white ">
                        <img src="{{$music->music_image}}" alt="{{$music->music_name}}" class="musicImg w-14">
                        <a href="" class="title hover:underline">{{$music->music_name}}</a>
                    </td>
                    <td class="album px-6 font-semibold">
                        {{$music->artist_group}}
                    </td>
                    <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                        {{$music->created_at}}
                    </td>
                    <td class="duration px-6">
                        {{-- <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a> --}}
                        
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

<div class="h-64"></div>

<script src="{{asset('js/handleDate.js')}}"></script>