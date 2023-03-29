
<x-layout :playlists="$playlists">

    {{-- @dd($like) --}}
    

    {{-- load index with message after loggin --}}
    <x-flash-message />

    <div class="w-full bg-gradient-to-b from-[#555] to-[#2a2a2a]">

        <div class="w-5/6 mx-auto flex gap-8 p-8 relative ">
            <div class="shadow-[0_0_35px] shadow-gray-900">
                <img src="{{$music->music_image}}" alt="" class="w-64">
            </div>
            <div class="flex flex-col justify-around text-white">
                <p>Titre</p>
                <h3 class="font-bold text-7xl">{{$music->music_name}}</h3>
                <div class="flex gap-2 items-center">
                    <img src="{{asset('images/avatar.jpg')}}" alt="" class="rounded-full w-[25px]">
                    <p class="">Artist Name. {{ \Illuminate\Support\Str::limit($music->created_at, 4, $end=' ') }} </p>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-b from-[#1f1f1f] to-[#171717] h-full">

        <div class="w-5/6 mx-auto p-8 flex items-center gap-8">
            {{-- check if music already liked  --}}
            @if ($like)
                <a href="/unlikeMusic/{{$music->id}}/{{auth()->id()}}" title="Edit playlist"><i class="fa-solid fa-heart text-yellow-400 text-4xl hover:text-yellow-700 cursor-pointer"></i></a>
            @else
                <a href="/likeMusic/{{$music->id}}/{{auth()->id()}}" title="Edit playlist"><i class="fa-regular fa-heart text-yellow-400 text-4xl hover:text-yellow-700 cursor-pointer"></i></a>
            @endif
            <div class="" id="playMusic">
                <i id="playBtn" class="fa-solid fa-play text-yellow-400 text-4xl hover:text-yellow-700 cursor-pointer"></i>
                <i id="pauseBtn" class="fa-solid fa-pause text-yellow-400 text-4xl hover:text-yellow-700 cursor-pointer"></i>
                <audio id="singleMusicSrc" src="{{$music->music_audio}}" controls hidden></audio>
            </div>
            <i id="commentBtn" class="fa-solid fa-comment text-yellow-400 text-4xl hover:text-yellow-700 cursor-pointer"></i>
        </div>

        {{-- comments component --}}
        <section class=" w-5/6 mx-auto" id="commentForm">
            <div class="mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg lg:text-2xl font-bold text-white">Comments</h2>
                </div>

                {{-- show all comments --}}
                @foreach ($comments as $comment)
                    <article class="p-6 mb-6 text-base bg-white rounded-lg">
                        <footer class="flex justify-between items-center mb-2">
                            {{-- avatar commente --}}
                            <div class="flex items-center">
                                <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold">
                                    <img class="mr-2 w-6 h-6 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Michael Gough">
                                    {{$comment->user->name}}
                                </p>
                                <p class="date text-sm text-gray-600 dark:text-gray-400">{{$comment->created_at}}</p>
                            </div>

                            {{-- if user who is loget show him the setting btn on his comments --}}
                            @if ($comment->user->id === auth()->id())
                                {{-- setting btn that show drop down menu --}}
                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment1"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow">
                                    <ul class="py-1 text-sm text-gray-700"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </footer>
                        <p class="text-gray-500 ">
                            {{$comment->commentaire}}
                        </p>
                    </article>
                @endforeach

                {{-- form that submit the comment --}}
                <form class="mb-6" action="/comment/{{$music->id}}" method="POST">

                    @csrf

                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="2" name="commentaire"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none "
                            placeholder="Write a comment..."></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-black font-semibold bg-yellow-400 rounded-lg focus:ring-4">
                        Post comment
                    </button>
                </form>
            </div>
        </section>

        <div class="h-36"></div>
    </div>
    


    <x-delete.delete />

    <script src="{{asset('js/handleDate.js')}}" defer></script>
    <script src="{{asset('js/singleMusic.js')}}" defer></script>
    <script src="{{asset('js/handleMusic.js')}}" defer></script>

</x-layout>