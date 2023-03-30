

<x-layout :playlists="$playlists">

    {{-- body of body --}}
    <section class="px-6 py-4 h-full">

        {{-- check if there is a playlist --}}
        @if (count($playlists) > 0)

            <div class="text-white font-bold text-3xl">
                <h3>Playlist</h3>
            </div>

            <div class="grid grid-cols-4 gap-4">
                @foreach ($playlists as $play)
                    <div class="bg-gray-600/30 flex flex-col gap-3 p-4 rounded-xl overflow-hidden cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-gray-600/60 ">
                        <img class="rounded-xl shadow-[0_0_15px] shadow-black object-fill" src="{{ $play->image ? asset('storage/' . $play->image) : asset('images/playlist bg.jpg')}}" alt=""/>
                        <div>
                            <h2 class="text-white font-bold text-xl">{{$play->name}}</h2>
                            <p class="text-gray-400">Par creater name</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr class="border-gray-500 mt-16 mb-34 w-full" />

        @else 

            <div class="flex justify-center mt-6">
                <div class="text-white flex flex-col items-center gap-8">
                    <img src="{{asset('images/noplaylist.png')}}" alt="" class="w-24">
                    <h3 class="text-3xl font-bold">Create your first playlist now</h3>
                    <p class="text-gray-300">It easy to do that , we will help you</p>
                    <a href="/createPlaylist"><button class="text-black bg-white font-semibold hover:scale-110 rounded-full text-sm px-5 py-3 mr-2 mb-2 ">Create a Playlist</button></a>
                </div>
            </div>

        @endif

        <div class="h-64"></div>

    </section>
    

</x-layout>