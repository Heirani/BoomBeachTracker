<div>
    <input type="checkbox" {{ $attributes }}
        class="border-gray-400 focus:border-indigo-300 focus:ring-indigo-200 ml-1 h-5 w-5 text-indigo-600
        @error($attributes['name']) border-red-500 @enderror
    ">
    <label for="{{ $attributes['name'] }}" class="w-full pl-2 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
    
    @error($attributes['name'])
        <span class="text-sm text-red-700/50">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
