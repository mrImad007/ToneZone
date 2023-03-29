

<x-layout :playlists="$playlists">

    {{-- body of body --}}
    <section class="px-6 py-4 h-full ">

        {{-- check if there is a playlist --}}
        @if (count($playlists) > 0)

            <div class="text-white font-bold text-3xl">
                <h3>My Playlist</h3>
            </div>

            <div class="grid grid-cols-4 gap-4 mt-4">
                @foreach ($playlists as $play)
                    <div class="bg-gray-600/30 relative flex flex-col gap-3 p-4 rounded-xl cursor-pointer transition-all duration-500 hover:bg-gray-600/60 ">
                        <a href="/playlist/{{$play->id}}" class="absolute top-0 left-0 w-full h-full"></a>
                        <img class="rounded-xl shadow-[0_0_15px] shadow-black object-fill" src="{{ $play->image ? $play->image : asset('images/playlist bg.jpg')}}" alt=""/>
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-white font-bold text-xl">{{$play->name}}</h2>
                                <p class="text-gray-400">{{auth()->user()->name}}</p>
                            </div>
                            <div class="relative">
                                <div id="avatarButton" class=" elipsis"><i class="fa-solid fa-ellipsis text-xl text-gray-400 cursor-pointer hover:text-white"></i></div>                            <!-- Dropdown menu -->
                                {{-- drop dorwn --}}
                                <div id="userDropdown" class="bg-gray-800 hidden absolute top-6 z-10 w-44 text-white rounded border border-gray-700 divide-y divide-gray-100 shadow">
                                    <ul class="py-1 text-sm " aria-labelledby="avatarButton">   
                                        <li>
                                            <a href="/admin/editArtistForm/{{$play->id}}" class="block py-2 px-4 text-center text-green-400 hover:bg-yellow-400 hover:text-black"><i class="fa-solid fa-pen mr-2"></i>Edit Artist {{$play->id}}</a>
                                        </li>
                                        <li class="">
                                            <button data-modal-toggle="deleteModal" value="{{$play->id}}" class="deleteBtn text-red-500 text-center block py-2 px-4 hover:bg-yellow-400 hover:text-black w-full">
                                                <i class="fa-solid fa-trash"></i>
                                                Delet
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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

        <x-delete.delete />

        <div class="h-64"></div>


    </section>
    
    <script>
        let deleteBtn = document.querySelectorAll(".deleteBtn");
        let elipsisBtn = document.querySelectorAll('.elipsis');

        deleteBtn.forEach((ele) => {
            ele.addEventListener("click", () => {
                document
                    .getElementById("confirm-delete")
                    .setAttribute("href", `/deletePlaylist/${ele.value}`);
            });
        });

        elipsisBtn.forEach(ele => {
            ele.addEventListener('click', () => {
                ele.nextElementSibling.classList.toggle('hidden');
            })
        })


    </script>

</x-layout>