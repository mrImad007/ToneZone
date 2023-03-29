<x-layout :playlists="$playlists">

    <x-flash-message />

    <section class="px-6 py-4 h-full bg-[#121212] overflow-y-scroll scrollbar-hide">

        <div class="my-6 text-white font-bold text-2xl">
            <h2>Artist</h2>
        </div>
        <div class="grid grid-cols-4 gap-4 ml-2 ">

            @foreach ($artists as $artist)
                <div id="music" class="allMusics cursor-pointer bg-gray-900 flex flex-col gap-3 rounded-sm hover:bg-gray-700 transition-all duration-500 group shadow-[0px_0px_5px] shadow-yellow-400">
                    <div class="overflow-hidden h-full rounded-full w-5/6 shadow-[0_0_15px] shadow-black my-4 mx-auto">
                        <img id="musicImg" class="rounded-t-sm object-fill group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500" src="{{$artist->image}}" alt=""/>
                    </div>
                    <div class="p-4 flex justify-between items-center gap-2 -mt-4">
                        <div class="flex flex-col w-1/2">
                            <a href="" class="hover:underline text-white"><h2 title="{{$artist->artist_name}}" class="text-white font-bold text-xl truncate">{{$artist->artist_name}}</h2></a>
                            <p class="text-gray-400">Artist</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


        <div class="h-64"></div>
    </section>

</x-layout>