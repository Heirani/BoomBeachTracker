<div>
    <label for="{{ $attributes['name'] }}" class="w-full pl-5 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
    <div class="mt-1">
        <select {{ $attributes }}
        class="w-full px-3 py-2 rounded-full border-gray-400 focus:border-indigo-300 focus:ring-indigo-200
        @error($attributes['name'])) border-red-500 @enderror ">
            @foreach (json_decode($elements) as $element)
                <option value="{{ $element->value }}">{{ $element->libelle }}</option>
            @endforeach
        </select>
        @error($attributes['name'])
            <span class="text-sm text-red-700/50">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
