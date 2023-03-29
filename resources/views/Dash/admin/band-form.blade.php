<x-dash-layout>

    <div class="w-4/6 bg-gray-700/70 p-6 mx-auto mt-4">
        <form action="/admin/storeBand" method="POST" enctype="multipart/form-data" class="w-full">

            @csrf
            {{-- band name --}}
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="band_name" value="{{old('band_name')}}" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=""/>
                <label for="band_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Band Name</label>
                @error('band_name')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            {{-- band memebers --}}
            <div class="w-full mb-6 group items-center" id="showInp">
                <div class="relative z-0">
                    <input type="text" name="band_members[]" value="" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" "/>
                    <label for="band_members[]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Band Member 1</label>
                    {{-- @error('band_members[]')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror --}}
                </div>
                <div class="w-full mt-4 flex justify-end">
                    <button type="button" id="addMember" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Add another one</button>
                </div>
            </div>
            {{-- band image --}}
            <div class="relative z-0 w-full mb-6 group">
                <input type="file" name="band_image" value="{{old('band_image')}}" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" " />
                <label for="band_image" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Band Image</label>
                @error('band_image')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            

            <button type="submit" class="text-black bg-yellow-400 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Create Band</button>
        </form>
    </div>

    <script src="{{asset('js/addMembers.js')}}"></script>

</x-dash-layout>