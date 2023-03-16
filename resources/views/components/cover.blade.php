
<div class="grid grid-cols-6 gap-4">
    @for ($i = 1; $i <= 8; $i++)
        <div class="bg-gray-200 rounded-xl shadow-[0_3px_4px] shadow-yellow-500 overflow-hidden cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:opacity-70 ">
            <img class="" src="{{asset('images/cover '.$i.'.jpg')}}" alt=""/>
        </div>
    @endfor
</div>