<footer id="footer" class="hidden bg-yellow-400 col-span-6 p-4 grid grid-cols-3 gap-6 fixed z-10 w-full bottom-0">
    <audio controls id="footerMusic" src="" hidden></audio>
    <div class="flex items-center">
        <div class="overflow-hidden rounded-xl mr-4">
            <img id="footerImg" class="h-14 w-14 flex-shrink-0" src="{{asset('images/cover 1.jpg')}}" alt="" />
        </div>
        <div class="mr-4">
            <div id="footerTitle" class="text-sm text-black text-line-clamp-1 font-semibold">
                Heaven
            </div>
            <div id="footerAlbum" class="text-xs text-gray-600 text-line-clamp-1">
                Ludwig van Beethoven
            </div>
        </div>
        <div class="flex items-center">
            <button class="text-black p-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path
                        d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                </svg>
            </button>
        </div>
    </div>
    <div>
        <div class="flex items-center justify-center mb-3">
            <button class="w-5 h-5 text-black mr-6">
                <svg class="fill-current w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                </svg>
            </button>
            {{-- previous btn  --}}
            <button id="previous" class="w-5 h-5 text-black mr-6">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
                </svg>
            </button>
            {{-- pause button --}}
            <button id="pause" class="hidden w-8 h-8 border border-black rounded-full flex text-black mr-6">
                <svg class="fill-current h-5 w-5 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
                </svg>
            </button>
            {{-- play button --}}
            <button  id="play" class="rounded-full flex text-black mr-6">
                <svg class="fill-current h-8 w-8 m-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z" fill="currentColor" /> <path d="M16 12L10 16.3301V7.66987L16 12Z" fill="currentColor" /> </svg> 
            </button>
            {{-- next btn --}}
            <button id="next" class="w-5 h-5 text-black mr-6">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
                </svg>
            </button>
            <button class="w-5 h-5 text-black">
                <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z" />
                </svg>
            </button>
        </div>
        <div class="flex items-center">
            <span class="text-xs text-black font-light">4:18</span>
            <div class="overflow-hidden relative flex-1 mx-2 rounded">
                <div class="border-b-4 border-gray-400 rounded"></div>
                <div
                    class="absolute inset-x-0 top-0 -translate-x-48 border-b-4 border-black rounded transform hover:border-green-200">
                </div>
            </div>
            <span class="text-xs text-black font-light">5:13</span>
        </div>
    </div>
</footer>