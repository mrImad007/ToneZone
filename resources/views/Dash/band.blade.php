

<x-dash-layout>


    <x-flash-message />

    @if (count($bands) > 0)

        <div class="my-6 text-white font-bold text-2xl">
            <h2>Bands</h2>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <a href="/admin/createBandForm" class="group">
                <div id="music" class="h-full allMusics bg-gray-900 flex flex-col items-center justify-center rounded-sm hover:bg-gray-700 transition-all duration-500 shadow-[0px_0px_5px] shadow-yellow-400">
                    <i class="fa-solid fa-plus text-yellow-400 text-3xl group-hover:text-5xl transition-all duration-500"></i>
                </div>
            </a>
            @foreach ($bands as $band)
                <div id="music" class="allMusics bg-gray-900 flex flex-col gap-3 rounded-sm hover:bg-gray-700 transition-all duration-500 group shadow-[0px_0px_5px] shadow-yellow-400">
                    <div class="overflow-hidden h-full rounded-full w-5/6 shadow-[0_0_15px] shadow-black my-4 mx-auto">
                        <img id="musicImg" class="rounded-t-sm object-fill group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500" src="{{$band->band_image}}" alt=""/>
                    </div>
                    <div class="p-4 flex justify-between items-center gap-2 -mt-4">
                        <div class="flex flex-col w-1/2">
                            <a href="" class="hover:underline text-white"><h2 title="{{$band->band_name}}" class="text-white font-bold text-xl truncate">{{$band->band_name}}</h2></a>
                            <p class="text-gray-400">Band</p>
                        </div>
                        <div class="relative">
                            <div id="avatarButton" class=" elipsis"><i class="fa-solid fa-ellipsis text-xl text-gray-400 cursor-pointer hover:text-white"></i></div>                            <!-- Dropdown menu -->
                            {{-- drop dorwn --}}
                            <div id="userDropdown" class="bg-gray-800 hidden absolute top-6 z-10 w-44 text-white rounded border border-gray-700 divide-y divide-gray-100 shadow">
                                <ul class="py-1 text-sm " aria-labelledby="avatarButton">   
                                    <li>
                                        <a href="/admin/editBandForm/{{$band->id}}" class="block py-2 px-4 text-center text-green-400 hover:bg-yellow-400 hover:text-black"><i class="fa-solid fa-pen mr-2"></i>Edit Band {{$band->id}}</a>
                                    </li>
                                    <li class="">
                                        <button data-modal-toggle="deleteModal" value="{{$band->id}}" class="deleteBtn text-red-500 text-center block py-2 px-4 hover:bg-yellow-400 hover:text-black w-full">
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
        
        <div class="flex justify-center mt-14">
            <div class="text-white flex flex-col items-center gap-8">
                <img src="{{asset('images/noplaylist.png')}}" alt="" class="w-24">
                <h3 class="text-3xl font-bold">Create your Band now</h3>
                <a href="/admin/createBandForm"><button class="text-black bg-white font-semibold hover:scale-110 rounded-full text-sm px-5 py-3 mr-2 mb-2 ">Create a Band</button></a>
            </div>
        </div>

    @endif

    <x-delete.delete />

    <div class="h-64"></div>

    <script>
        let deleteBtn = document.querySelectorAll(".deleteBtn");
        let elipsisBtn = document.querySelectorAll('.elipsis');

        deleteBtn.forEach((ele) => {
            ele.addEventListener("click", () => {
                document
                    .getElementById("confirm-delete")
                    .setAttribute("href", `/admin/deleteBand/${ele.value}`);
            });
        });

        elipsisBtn.forEach(ele => {
            ele.addEventListener('click', () => {
                ele.nextElementSibling.classList.toggle('hidden');
            })
        })


    </script>


</x-dash-layout>