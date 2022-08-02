<x-layout>
    <x-nav />


    <section class="flex flex-col items-center justify-center h-screen mt-8">
        <div class="flex items-center justify-center mb-10">
            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">

                <a href="/student/dashboard" class="rounded-xl inline-block px-6 py-2.5 bg-blue-400 text-white font-medium text-xs leading-tight uppercase  focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out hover:bg-blue-600">Go Back</a>

            </div>
        </div>

        <div class="w-2/5 p-4 border rounded-lg shadow-md bg-lwhite sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="mb-4 text-center">
                <h5 class="text-2xl font-bold leading-none text-gray-900 dark:text-white">{{ $post->title }}</h5>
                <p class="text-sm font-medium text-gray-700 truncate dark:text-white">
                    {{ $post->created_at->diffForHumans() }}
                </p>

            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <h1 class="text-lg font-bold text-black">Company:</h1>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                    {{ $post->company->name }}
                                </p>

                            </div>
                            <div class="inline-flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                                industry:
                            </div>
                            <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                {{ $post->company->industry->name }}
                            </p>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4 ">
                            <div class="flex-shrink-0">
                                <h1 class="text-lg font-bold text-black">Email:</h1>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                    {{ $post->company->email }}
                                </p>

                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                Address:
                            </div>
                            <p class="text-sm font-medium text-gray-700 truncate dark:text-white">
                    {{ $post->company->adress }}
                            </p>
                        </div>

                    </li>


                </ul>

                <div class="mt-8 justify-items-center">
                <div>
                    <h1 class="font-bold text-black">Cover Letter:</h1>
                    <p class="text-center text-black"></p>
                </div>

                    <form method="POST" action="">
                        @csrf
                        <x-form.textarea name="cover_letter" />

                        <!--file input -->
                        <x-form.input type="file" name="cv" />
                        <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-blue-500 rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105" type="submit">
                            Apply
                        </button>
                    </form>
                </div>


            </div>
        </div>

    </section>
    @include('components._footer')
</x-layout>
