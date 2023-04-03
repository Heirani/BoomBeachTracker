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
                        <span class="text-sm font-light">{{ $defense->id == null ? 'Nouvelle' : 'AJOUT NIVEAU' }} DEFENSE </span>
                        @if($defense->id != null)
                        - <span class="text-lg font-semibold">{{  $defense != null ? ''.$defense->name : ''  }}</span>
                        @endif
                    </div>
                    <!--<input type="text" wiremodel.defer="defense_id" class="hidden">-->
                </div>

                <div class="px-5 py-3 mt-5 text-gray-600 border-2 border-indigo-300 bg-white/80 rounded-3xl">
                    <div class="grid w-full grid-cols-12 gap-4 text-left">
                        <div class="col-span-3">
                            <x-inputs.input name='level' type="number" label='Niveau' wire:model.defer="level" required autofocus>
                            </x-inputs.input>
                        </div>

                        <div class="col-span-3">
                            <x-inputs.input name='sante' label='Santé' wire:model.defer="sante">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='type' label='Type' wire:model.defer="type">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='niveau_qg_requis' type="number" label='NiveauQG requis' wire:model.defer="niveau_qg_requis">
                            </x-inputs.input>
                        </div>
                    </div>
                    <hr class="mt-4 border-indigo-300">
                    <div class="grid w-full grid-cols-12 gap-4 mt-4 text-left">
                        <div class="col-span-3">
                            <x-inputs.input name='or' type="number" label='Coût en OR' wire:model.defer="or">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='bois' type="number" label='Coût en BOIS' wire:model.defer="bois">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='pierre' type="number" label='Coût en PIERRE' wire:model.defer="pierre">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='fer' type="number" label='Coût en FER' wire:model.defer="fer">
                            </x-inputs.input>
                        </div>
                    </div>
                    <div class="grid w-full grid-cols-12 gap-4 mt-4 text-left">
                        <div class="col-span-3">
                            <x-inputs.input name='immediat' type="number" label='Coût en DIAMANT' wire:model.defer="immediat">
                            </x-inputs.input>
                        </div>

                        <div class="col-span-3">
                            <x-inputs.input name='uptime' type="text" label='Temps up' wire:model.defer="uptime">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='gain_xp' type="number" label='Gain XP' wire:model.defer="gain_xp">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-12">
                            <x-inputs.input name='image_link' type="text" label='Image' wire:model.defer="image_link">
                            </x-inputs.input>
                        </div>
                    </div>
                    <hr class="mt-4 border-indigo-300">
                    <div class="grid w-full grid-cols-12 gap-4 mt-4 text-left">
                        <div class="col-span-3">
                            <x-inputs.input name='degat_par_seconde' type="number" label='Dégâts par seconde' wire:model.defer="degat_par_seconde">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='degat_par_tir' type="number" label='Dégâts par tir' wire:model.defer="degat_par_tir">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='brulure_residuelle' type="number" label='Brûlure résiduelle' wire:model.defer="brulure_residuelle">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='brulure_residuelle_totale' type="number" label='Brûlure résiduelle totale' wire:model.defer="brulure_residuelle_totale">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='degat_maximum_par_seconde' type="number" label='Dégâts max. par seconde' wire:model.defer="degat_maximum_par_seconde">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='degat_par_salve' type="number" label='Dégâts par salve' wire:model.defer="degat_par_salve">
                            </x-inputs.input>
                        </div>
                        <div class="col-span-3">
                            <x-inputs.input name='duree_etourdissement' type="text" label='Durée étourdissement' wire:model.defer="duree_etourdissement">
                            </x-inputs.input>
                        </div>
                    </div>
                    <hr class="mt-4 border-indigo-300">
                    <div class="grid w-full grid-cols-12 gap-4 mt-5 text-left">
                        <div class="col-span-12 text-center">
                            <x-buttons.button-green label="Enregistrer" wire:click="save"></x-buttons.button-green>
                        </div>
                    </div>
                </div>

                <div class="py-3 mt-5 text-gray-600 bg-white/80 border-2 border-indigo-300 px-[180px] rounded-3xl">
                    <div class="grid w-full grid-cols-12 gap-4 text-left">
                        <div class="col-span-12 text-center">
                            TOUS LES NIVEAUS SOUS FORME DE TABLEAU
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


