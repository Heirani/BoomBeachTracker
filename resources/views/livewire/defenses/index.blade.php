<div class="py-4
@if($sidebarShow)
    ml-60
@endif
transition-transform duration-500">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="w-full">

            <div class="pt-[40px]">

                <div class="flex px-4 py-4 text-xl text-white bg-indigo-500 border-2 border-indigo-200 shadow-md shadow-indigo-500 rounded-3xl">
                    <div class="text-center border-r-2 basis-3/4 border-r-indigo-300">
                        <span>{{$defenses->total()}} Défense(s)</span>
                    </div>
                    <div class="text-center basis-1/4">

                        <a href="{{ route('admin.defenses.create') }}" class="px-5 py-2 text-sm border border-white rounded-lg hover:border-2 hover:font-bold">
                            <i class="fa fa-plus"></i>
                            <span class="ml-3">Nouvelle</span>
                        </a>
                    </div>
                </div>

                <div class="px-3 py-3 mt-5 text-gray-600 bg-white border-2 border-indigo-300 rounded-3xl">
                    <div class="mt-5 mb-5">
                        {{ $defenses->links() }}
                    </div>

                    <div class="w-full">
                        <table class="w-full overflow-auto border border-collapse border-indigo-200 table-auto">
                                <thead>
                                    <tr class="text-sm text-white bg-indigo-500">
                                        <!--<th>id</th>-->
                                        <th class="sticky px-2 py-2 font-normal border border-indigo-200 top-10">
                                            ID
                                        </th>
                                        <th class="sticky px-2 py-2 font-normal border border-indigo-200 top-10">
                                            Nom
                                        </th>
                                        <th class="sticky px-2 py-2 font-normal text-center border border-indigo-200 top-10 ">Actions</th>
                                    </tr>
                                </thead>
                                <!-- Table head -->
                                <!-- Table body -->
                                <tbody>

                                @foreach($defenses as $defense)
                                    <tr class="text-sm font-light h-[50px] odd:bg-white even:bg-indigo-100">
                                        <td class="px-2 py-2 font-light text-left border border-indigo-200 h-[50px]">
                                            <a class="" href="#">{{strtoupper($defense->id)}}</a>
                                        </td>
                                        <td class="px-2 py-2 font-light text-left border border-indigo-200 h-[50px]">
                                            <a class="" href="#">{{strtoupper($defense->name)}}</a>
                                        </td>
                                        <td class="px-2 py-2 font-light text-center border border-indigo-200" style="min-width:140px;">
                                            <a class="ml-2 hover:text-blue-600 hover:text-lg" href="{{ route('admin.defenses.edit',[$defense->id]) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="ml-2 hover:text-cyan-600 hover:text-lg" href="{{ route('admin.defenses.show',[$defense->id]) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!-- Table body -->
                            </table>
                            <!-- Table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('modals')

@endpush
