<x-dash-layout >
    <div class="mx-auto bg-gradient-to-b from-gray-700 via-gray-900 to-black h-full p-12">
        <form action="/admin/storemusic" method="POST" class="grid grid-cols-[auto_1fr] w-full  gap-8" enctype="multipart/form-data">

            @csrf

            <div class="flex items-center justify-center w-[300px] aspect-square" >
                <label for="dropzone-file" class="overflow-hidden shadow-[0_0_15px] flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <img src="" alt="" class="" id="img">
                    <div id="textupload" class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" name="music_image" class="hidden" />
                </label>
            </div>
            @error('music_image')
                <span class="text-red-500 text-xs mt-1">{{$message}}</span>
            @enderror

            <div class="text-white flex flex-col justify-evenly h-full w-1/2">
                <div>
                    <label class="font-bold">Music Name</label>
                    <input type="text" name="music_name" value="{{old('music_name')}}" placeholder="Music Name" class="w-full py-2 px-4 rounded-xl bg-transparent border border-gray-400 outline-none">
                    {{-- load page if some field are wrong or error --}}
                    @error('music_name')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <div>
                    <label class="font-bold">Group Name</label>
                    <input type="text" name="artist_group" value="{{old('artist_group')}}" placeholder="Group Name" class="w-full py-2 px-4 rounded-xl bg-transparent border border-gray-400 outline-none">
                    {{-- load page if some field are wrong or error --}}
                    @error('artist_group')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                <div>
                    <label class="font-bold block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Music File</label>
                    <input name="music_audio" value="{{old('music_audio')}}" class="py-2 px-2 block w-full text-sm text-gray-300 border border-gray-300 rounded-lg cursor-pointer bg-transparent focus:outline-none" id="file_input" type="file">

                    @error('music_audio')
                        <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                    @enderror
                </div>

                {{-- <p class="font-bold underline cursor-pointer">{{auth()->user()->name}}</p> --}}

                {{-- submit btn --}}
                <div class="flex justify-center">
                    <button class="text-black border-2 border-black bg-yellow-400 hover:bg-yellow-700 font-semibold rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Add Music</button>
                </div>
            </div>
        </form>
    </div>

</x-dash-layout>