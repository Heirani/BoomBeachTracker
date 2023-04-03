<div>
    <label for="{{ $attributes['name'] }}" class="w-full pl-5 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
    <div class="mt-1">

        <input type="{{ $attributes['type']??'text' }}" {{ $attributes->except(['class'])  }}
            class="w-full px-3 py-2 rounded-full disabled:bg-indigo-200 border-gray-400 focus:border-indigo-300 focus:ring-indigo-200 {{ isset($attributes['type']) && $attributes['type']=='number' ?'text-right':'' }} {{ $attributes['class']??'' }}
            @error($attributes['name']) border-red-500 @enderror "
            @if(isset($attributes['disable']) && $attributes['disable']=='disabled')
            disabled='disabled'
            @endif
            >

        @error($attributes['name'])
            <span class="text-sm text-red-700/50">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div>
