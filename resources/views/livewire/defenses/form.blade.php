<div class="py-4
@if($sidebarShow)
    ml-60
@endif
transition-transform duration-500">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="w-full">

            <div class="pt-[40px]">

                <div class="flex px-4 py-4 text-xl text-white bg-indigo-500 border-2 border-indigo-200 shadow-md shadow-indigo-500 rounded-3xl">
                    <div class="w-full text-center">
                        <span class="text-sm font-light">{{ $defense->id == null ? 'Nouvelle' : 'Modification' }} Defense </span>
                        @if($defense->id != null)
                        - <span class="text-lg font-semibold">{{  $defense != null ? ''.$defense->name : ''  }}</span>
                        @endif
                    </div>
                    <!--<input type="text" wiremodel.defer="defense_id" class="hidden">-->
                </div>

                <div class="py-3 mt-5 text-gray-600 bg-white/80 border-2 border-indigo-300 px-[180px] rounded-3xl">
                    <div class="grid w-full grid-cols-12 gap-4 text-left">
                        <div class="col-span-6">
                            <x-inputs.input name='name' label='Nom' wire:model.defer="name" required autofocus>
                            </x-inputs.input>
                        </div>

                        <div class="col-span-3">
                            <x-inputs.input name='taille' label='Taille' wire:model.defer="taille">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='type' label='Type' wire:model.defer="type">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-12 text-center">
                            <x-buttons.button-green label="Enregistrer" wire:click="save"></x-buttons.button-green>
                        </div>
                    </div>
                </div>

                <div class="py-3 mt-5 text-gray-600 bg-white/80 border-2 border-indigo-300 px-[180px] rounded-3xl">
                    <div class="grid w-full grid-cols-12 gap-4 text-left">
                        <div class="col-span-12 text-center">
                            <x-buttons.button-green label="Ajouter Niveau" wire:click="add_level"></x-buttons.button-green>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


