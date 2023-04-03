<div>
    @props([
        'error' => null
    ])

    <div
        x-data="{ value: @entangle($attributes->wire('model')) }"
        x-on:change="value = $event.target.value"
        x-init="flatpickr($refs.input, { dateFormat: 'd/m/Y', locale:'fr', defaultDate: value })"

    >
        <label for="{{ $attributes['name'] }}" class="w-full pl-5 text-sm font-semibold text-gray-600">{{ $attributes['label'] }}</label>
        <div class="mt-1">
            <input autocomplete="off"
                {{ $attributes->whereDoesntStartWith('wire:model') }}
                x-ref="input"
                x-bind:value="value"
                type="text"
                class="w-full px-3 py-2 rounded-full border-gray-400 focus:border-indigo-300 focus:ring-indigo-200 @error($attributes['name']) border-red-500 @enderror"
            />
        </div>
    </div>
</div>
