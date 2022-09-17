<x-layout>
    <x-nav />

    <section class="grid col-auto mt-24 mb-24">
    <div class="flex items-center justify-center">
        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
            <a href="/student/dashboard/{{auth()->user()->student->id}}" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Profile</a>
            <a href="/student/internships" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Explore Internships</a>
        </div>
    </div>


    <div class="w-full sm:px-6">

            <div class="overflow-x-auto mt-7">
                <table class="w-full whitespace-nowrap">
                    <x-table.table-th name="Internship" />
                    <x-table.table-th name="Company" />
                    <x-table.table-th name="date" />
                    <x-table.table-th name="Status" />


                    <tbody>
@foreach($applications as $application)
                        <x-table.table-tr>
                            <x-table.table-td name="{{ $application->internShipPost->title }}" />
                            <x-table.table-td name="{{ $application->internShipPost->company->name }}" />
                            <x-table.table-td name="{{ $application->updated_at->diffForHumans() }}" />
                            <x-table.table-td name="{{ $application->status }}" />

                            <x-table.table-button name="view" path="/student/applications/{{ $application->id }}" />
                        </x-table.table-tr>
@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>




</section>

    @include('components._footer')
</x-layout>
