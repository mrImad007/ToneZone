<x-dash-layout>

    <x-flash-message />

    <div class="flex justify-end mr-4">
        <a href="/admin/createMusic" class="text-black text-end fixed p-2 w-12 aspect-square bg-yellow-400 rounded-full cursor-pointer flex items-center justify-center">
            <i class="fa-solid fa-plus text-3xl"></i>
        </a>
    </div>

    <div class="flex justify-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-5/6">
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
                            Action
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
                            <td class="duration px-6 ">
                                <a href="/admin/editMusic/{{$music->id}}" class="mr-4 text-green-500 text-center">
                                    <i class="fa-solid fa-pen"></i>
                                    Edit
                                </a>
                                <button data-modal-toggle="deleteModal" value="{{$music->id}}" class="deleteBtn text-red-500 text-center">
                                    <i class="fa-solid fa-trash"></i>
                                    Delet
                                </button>
                            </td>
                            <td class="hidden">
                                <audio controls src="{{$music->music_audio}}" class="audio"></audio>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-delete.delete  />

</x-dash-layout>