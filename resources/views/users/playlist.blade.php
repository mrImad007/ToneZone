<x-layout :playlists="$playlists">
    <div class="mx-auto h-full p-12 ">
        <form action="/storeplaylist" method="POST" class="grid grid-cols-[auto_1fr] w-full  gap-8" enctype="multipart/form-data">

            @csrf

            <div class="flex items-center justify-center w-[300px] aspect-square" >
                <label for="dropzone-file" class="overflow-hidden shadow-[0_0_15px] flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <img src="" alt="" class="" id="img">
                    <div id="textupload" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" name="image" value="{{old('image')}}" class="hidden" />
                    {{-- @error('image')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror --}}
                </label>
            </div>
            <div class="text-white flex flex-col justify-evenly h-full w-1/2">
                <p class="font-bold">Playlist</p>
                <input type="text" name="name" placeholder="PlayList Name" class="py-2 px-4 rounded-xl bg-transparent border border-gray-400 outline-none">

                {{-- load page if some field are wrong or error --}}
                @error('name')
                    <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                @enderror

                <p class="font-bold underline cursor-pointer">{{auth()->user()->name}}</p>

                <div class="flex justify-center">
                    <button class="text-black border-2 border-black bg-yellow-400 hover:bg-yellow-700 font-semibold rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Add PlayList</button>
                </div>
            </div>
        </form>
    </div>

</x-layout>