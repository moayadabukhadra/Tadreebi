<x-layout>
    <x-nav />

    <section class="grid col-auto mt-24">
    <div class="flex items-center justify-center">
        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
            <a href="/company/applications" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">All Applications</a>
            <a href="/company/post/create" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Create Post</a>
        </div>
    </div>


    <div class="w-full sm:px-6">
        <div class="px-4 py-4 md:px-10 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl dark:text-white">Applications</p>

            </div>
        </div>
        <div class="px-4 py-4 bg-white dark:bg-gray-900 md:py-7 md:px-8 xl:px-10">
            <div class="items-center justify-between sm:flex">
                <div class="flex items-center">
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800" href="/company/applications">
                        <div class="px-8 py-2 text-indigo-700 rounded-full">
                            <p>All</p>
                        </div>
                    </a>
                    <a class="ml-4 rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8" href="/company/applications/accepted">
                        <div class="px-8 py-2 text-gray-600 rounded-full dark:text-gray-200 hover:text-indigo-700 hover:bg-indigo-100 ">
                            <p>Accepted</p>
                        </div>
                    </a>

                </div>
            </div>
            <div class="overflow-x-auto mt-7">
                <table class="w-full whitespace-nowrap">
                    <x-table.table-th name="student" />
                    <x-table.table-th name="Factualy" />
                    <x-table.table-th name="Post" />
                    <x-table.table-th name="gpa" />
                    <x-table.table-th name="Status" />
                    <x-table.table-th name="date" />

                    <tbody>
@foreach($applications as $application)
                        <x-table.table-tr>
                            <x-table.table-td name="{{ $application->student->name }}" />
                            <x-table.table-td name="{{ $application->student->factualy }}" />
                            <x-table.table-td name="{{ $application->internShipPost->title }}" />
                            <x-table.table-td name="{{ $application->student->gpa }}" />
                            <x-table.table-td name="{{ $application->status }}" />
                            <x-table.table-td name="{{ $application->created_at }}" />
                            <x-table.table-button name="view" path="/application/{{ $application->id }}" />
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
