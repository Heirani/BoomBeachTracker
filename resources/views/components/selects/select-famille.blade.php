<div>
    <label for="famille_id" class="w-full pl-5 text-sm font-semibold text-gray-600">Famille</label>
    <div class="mt-1">
        <select wire:model.defer="famille_id"
        class="w-full px-3 py-2 rounded-full border-gray-400 focus:border-indigo-300 focus:ring-indigo-200
        @error('famille_id')) border-red-500 @enderror " required>
            @foreach ($attributes['familles'] as $famille)
                <option value="{{ $famille->id }}">{{ $famille->code }} - {{ $famille->libelle }}</option>
            @endforeach
        </select>
        @error('famille_id')
            <span class="text-sm text-red-700/50">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
