

<x-layout :playlists="$playlists" >
            {{-- load index with message after loggin --}}
            <x-flash-message />
            {{-- body of body --}}
            <section class="px-6 py-4 h-full">
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

                {{-- music --}}
                <x-music :musics="$musics" />

            </section>

</x-layout>