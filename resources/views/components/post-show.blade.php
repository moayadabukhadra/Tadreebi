<x-layout>
    <x-nav />


    <section class="flex flex-col items-center justify-center h-screen ">
    <div class="flex items-center justify-center mb-10">
            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
                <a href="/company/dashboard" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Home</a>
                <a class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">All Applications</a>
                <a class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Create Post</a>
            </div>
    </div>

        <div class="w-2/5 p-4 border rounded-lg shadow-md bg-lwhite sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Post Title</h5>

            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <h1 class="font-bold text-black">Name:</h1>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Neil Sims
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Factualy:
                            </div>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Factualy
                            </p>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <h1 class="font-bold text-black">Email:</h1>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    email@email.com
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                GPA:
                            </div>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                4.0 </p>

                        </div>
                    </li>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <h1 class="font-bold text-black">Date:</h1>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    2-7-2022
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Pos
                            </div>
                        </div>
                    </li>

                </ul>
                <div>
                    <h1 class="font-bold text-black">Cover Letter:</h1>
                    <p class="text-center text-black">l;ajgdl;ajl;ajgdl;sgnlknhdlihjhiojerpohjehl;jmd;lhgdl;sgnlknhdlihjhiojerpohjehl;jmd;lhl;s</p>
                </div>

                <div class="mt-8">

                    <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-blue-500 rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                        Accept
                    </button>


                    <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-red-500 rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105">
                        Reject
                    </button>
                </div>

            </div>
        </div>

    </section>
    @include('components._footer')
</x-layout>
