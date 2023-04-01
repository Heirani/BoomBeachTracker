@if($active == "1")
<div class="flex px-5 py-4 text-left text-white bg-indigo-500 border-b rounded-r-full cursor-pointer border-b-gray-300">
    {{ $slot }}
</div>
@else
<div class="flex px-5 pt-4 pb-2 text-left transition-all duration-500 bg-white border-b cursor-pointer border-b-gray-300 hover:bg-indigo-200">
    {{ $slot }}
</div>
@endif


