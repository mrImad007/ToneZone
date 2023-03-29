

<x-layout :playlists="$playlists">

    {{-- load index with message after loggin --}}
    <x-flash-message />

    <div class="w-full bg-gradient-to-b from-[#555] to-[#2a2a2a]">

        <div class="w-5/6 mx-auto flex gap-8 p-8 relative ">
            <div class="shadow-[0_0_35px] shadow-gray-900">
                <img src="{{$playlist->image ? $playlist->image : asset('images/playlist bg.jpg')}}" alt="" class="w-64">
            </div>
            <div class="flex flex-col justify-around text-white">
                <p>Playlist</p>
                <h3 class="font-bold text-7xl">{{$playlist->name}}</h3>
                <p>{{$user->name}}. {{count($playlistMusics)}} titre</p>
            </div>
            {{-- edit and delete btn of playlist --}}
            <div class="absolute top-6 right-4 flex flex-col items-center gap-4">
                {{-- edit btn --}}
                <a href="/editPlaylist/{{$playlist->id}}" title="Edit playlist"><i class="fa-solid fa-pen text-green-500"></i></a>
                {{-- delete btn --}}
                <button title="Delete playlist" id="deleteButton" data-modal-toggle="deleteModal" value="{{$playlist->id}}" class="w-fit deleteBtn" type="button">
                    <i class="fa-solid fa-trash text-red-500"></i>
                </button>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-b from-[#1f1f1f] to-[#171717]">

        <div class="w-5/6 mx-auto">

            @if (count($playlistMusics) > 0)

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
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($playlistMusics as $key => $music)
                            <tr class="music bg-transparent hover:bg-gray-200/20 cursor-pointer">
                                <td class="px-6">
                                    {{$key + 1}}
                                </td>
                                <td class="flex gap-4 items-center font-bold text-white ">
                                    <img src="{{$music->music_image}}" alt="" class="musicImg w-14">
                                    <a href="" class="title hover:underline">{{$music->music_name}}</a>
                                </td>
                                <td class="album px-6 font-semibold">
                                    Artist
                                </td>
                                <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                                    {{$music->created_at}}
                                </td>
                                <td class="text-center">
                                    <a href="/deleteMusic/{{$music->id_pm}}"><i class="fa-solid fa-trash text-red-400 hover:text-red-500"></i></a>
                                </td>
                                <td class="hidden">
                                    <audio controls src="{{asset('audio/desert.mp3')}}" class="audio"></audio>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else 

                <div class="pt-16 pb-8">
                    <hr class="border-gray-600 w-full" />
                </div>

                <div class="flex justify-center mt-6">
                    <div class="text-white flex items-center gap-8">
                        <img src="{{asset('images/noplaylist.png')}}" alt="" class="w-20">
                        <div class="flex flex-col gap-4 items-center">
                            <h3 class="text-2xl font-bold">Create your first playlist now</h3>
                            <a href="/"><button class="text-black bg-yellow-400 font-semibold hover:scale-110 rounded-full text-sm px-5 py-3 mr-2 mb-2 ">Add a Music</button></a>
                        </div>
                    </div>
                </div>

            @endif

            <div class="h-36"></div>

        </div>
    </div>
        
    <x-delete.delete />


    <script src="{{asset('js/handleDate.js')}}" defer></script>
    <script>

        let deleteBtn = document.querySelector(".deleteBtn");

        deleteBtn.addEventListener("click", () => {
            document
                .getElementById("confirm-delete")
                .setAttribute("href", `/deletePlaylist/${deleteBtn.value}`);
        });

    </script>

</x-layout>