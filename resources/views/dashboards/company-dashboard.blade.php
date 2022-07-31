<x-layout>
    <x-nav />
    <section class="grid col-auto mt-24">
        <div class="flex items-center justify-center">
            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
                <a href="/company/dashboard" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Home</a>
                <a class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">All Applications</a>
                <a class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Create Post</a>
            </div>
        </div>


        <div class="w-full sm:px-6">
            <div class="px-4 py-4 md:px-10 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl dark:text-white">Tasks</p>
                    <div class="flex items-center px-4 py-3 text-sm font-medium leading-none text-gray-600 bg-gray-200 rounded cursor-pointer dark:text-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700">
                        <p>Sort By:</p>
                        <select aria-label="select" class="ml-1 bg-transparent focus:text-indigo-600 focus:outline-none">
                            <option class="text-sm text-indigo-800">Latest</option>
                            <option class="text-sm text-indigo-800">Oldest</option>
                            <option class="text-sm text-indigo-800">Latest</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-4 py-4 bg-white dark:bg-gray-900 md:py-7 md:px-8 xl:px-10">
                <div class="items-center justify-between sm:flex">
                    <div class="flex items-center">
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                            <div class="px-8 py-2 text-indigo-700 bg-indigo-100 rounded-full">
                                <p>All</p>
                            </div>
                        </a>
                        <a class="ml-4 rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8" href="javascript:void(0)">
                            <div class="px-8 py-2 text-gray-600 rounded-full dark:text-gray-200 hover:text-indigo-700 hover:bg-indigo-100 ">
                                <p>Done</p>
                            </div>
                        </a>
                        <a class="ml-4 rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8" href="javascript:void(0)">
                            <div class="px-8 py-2 text-gray-600 rounded-full dark:text-gray-200 hover:text-indigo-700 hover:bg-indigo-100 ">
                                <p>Pending</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto mt-7">
                    <table class="w-full whitespace-nowrap">
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">Student</span>
                            </div>
                        </th>
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">Factualy</span>
                            </div>
                        </th>
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">Post</span>
                            </div>
                        </th>
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">gpa</span>
                            </div>
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">Status</span>
                            </div>
                        </th>
                        <th>
                            <div class="px-6 py-4 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                <span class="text-gray-600">date</span>
                            </div>

                        <tbody>

                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="h-16 border border-gray-100 rounded focus:outline-none dark:border-gray-600">
                            <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="mr-2 text-base font-medium leading-none text-gray-700 dark:text-white">Vue integration</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="mr-2 text-base font-medium leading-none text-gray-700 dark:text-white">Vue integration</p>
                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg" alt="tag">
                                        <p class="ml-2 text-sm leading-none text-gray-600 dark:text-gray-200">Urgent</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg" alt="list">
                                        <p class="ml-2 text-sm leading-none text-gray-600 dark:text-gray-200">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg4.svg" alt="chat">
                                        <p class="ml-2 text-sm leading-none text-gray-600 dark:text-gray-200">23</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg" alt="paper clip">
                                        <p class="ml-2 text-sm leading-none text-gray-600 dark:text-gray-200">04/07</p>
                                    </div>
                                </td>

                                <td>



                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .checkbox:checked+.check-icon {
                display: flex;
            }
        </style>





    </section>
    @include('components._footer')
</x-layout>
