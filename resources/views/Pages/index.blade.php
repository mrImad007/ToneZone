

<x-layout :playlists="$playlists" >
            {{-- load index with message after loggin --}}
            <x-flash-message />
            {{-- body of body --}}
            <section class="px-6 py-4 h-full">
                @auth    
                    <div class="flex items-center h-fit mb-6">
                        <div class="flex-1">
                            <h3 class="text-2xl text-white font-bold">
                                <a class="border-b border-transparent hover:border-white" href="">Recently played</a>
                            </h3>
                        </div>
                        <div>
                            <a class="text-xs text-gray-100 tracking-widest uppercase hover:underline" href="">See all</a>
                        </div>
                    </div>
                    {{-- covers  --}}
                    <x-cover />
                @endauth

                
                {{-- music --}}
                <x-music :musics="$musics" :playlists="$playlists" />

                {{-- <ul class="bg-white absolute top-1/2 left-1/2 rounded" id="menu">
                    <li class="bg-gray-300 px-2">Add To Playlist</li>
                    @foreach ($playlists as $playlist)
                        <li><a href="">{{$playlist->name}}</a></li>
                    @endforeach
                </ul> --}}

            </section>

</x-layout>