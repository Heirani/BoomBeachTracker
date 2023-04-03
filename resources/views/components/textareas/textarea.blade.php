<div>
    <label for="{{ $attributes['name'] }}" class="w-full pl-5 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
    <div class="mt-1">
        <textarea {{ $attributes }} class="w-full px-3 h-30 rounded-xl border-gray-400 focus:border-indigo-300 focus:ring-indigo-200 disabled:bg-indigo-200
        @error($attributes['name']) border-red-500 @enderror
        "
        @if(isset($attributes['disable']) && $attributes['disable']=='disabled')
            disabled='disabled'
            @endif
        >{{ $slot }}</textarea>
        @error($attributes['name'])
            <span class="text-sm text-red-700/50">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
