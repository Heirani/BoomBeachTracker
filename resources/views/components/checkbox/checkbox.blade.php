<div>
    <label for="{{ $attributes['name'] }}" class="w-full pl-5 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
    <div class="mt-1">
        <input type="checkbox" {{ $attributes }}
            class="border-gray-400 focus:border-indigo-300 focus:ring-indigo-200 ml-6 h-8 w-8 text-indigo-600
            @error($attributes['name']) border-red-500 @enderror
        ">
        @error($attributes['name'])
            <span class="text-sm text-red-700/50">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
