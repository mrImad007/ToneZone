
<x-layout :playlists="$playlists">

    {{-- load index with message after loggin --}}
    <x-flash-message />

    <div class="w-full bg-gradient-to-b from-[#fc4889] via-[#fd5274] to-[#fd7865]">

        <div class="w-5/6 mx-auto flex gap-8 p-8 relative ">
            <div class="shadow-[0_0_35px] shadow-gray-900">
                <img src="{{asset('images/likedsongs.jpg')}}" alt="" class="w-64">
            </div>
            <div class="flex flex-col justify-around text-white">
                <p>Titre</p>
                <h3 class="font-bold text-7xl">Songs Liked</h3>
                <div class="flex gap-2 items-center">
                    <p> {{auth()->user()->name}} . {{count($likedMusic)}} </p>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-b from-[#47201a] to-[#341713]">

        <div class="w-5/6 mx-auto p-8 flex items-center gap-8">
            @if (count($likedMusic) > 0)

                <table class="w-full text-sm text-left text-gray-500 border-b border-gray-600">
                    <thead class="text-xs text-gray-400 border-b border-gray-600">
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
                        @foreach ($likedMusic as $key => $music)
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
                                    <a href="/unlikeMusic/{{$music->id}}/{{auth()->id()}}" title="Edit playlist"><i class="fa-solid fa-heart text-yellow-400 text-xl hover:text-yellow-700 cursor-pointer"></i></a>
                                </td>
                                <td class="hidden">
                                    <audio controls src="{{$music->music_audio}}" class="audio"></audio>
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
                            <h3 class="text-2xl font-bold">The Songs That You Want is here</h3>
                            <a href="/"><button class="text-black bg-yellow-400 font-semibold hover:scale-110 rounded-full text-sm px-5 py-3 mr-2 mb-2 ">Like a Music</button></a>
                        </div>
                    </div>
                </div>

            @endif
        </div>

        <div class="h-36"></div>
    </div>
    


    <x-delete.delete />


    <script src="{{asset('js/handleDate.js')}}" defer></script>
    <script src="{{asset('js/singleMusic.js')}}" defer></script>
    <script src="{{asset('js/handleMusic.js')}}" defer></script>

</x-layout>