<x-layout>
    <x-nav />



    <div class="flex items-center justify-center mt-24">
        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
            <a href="/" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Home</a>
            <a href="/company/dashboard" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">All Applications</a>
            <a class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Create Post</a>
        </div>
    </div>
    <div class="mt-8 mb-8 bg-gray-200 rounded-lg sm:mx-32 lg:mx-32 xl:mx-72">
        <div class="container flex justify-between mx-auto">
            <div class="w-full">
                <div class="px-4">
                    <h1 class="flex px-5 pt-10 text-4xl text-black font-thinner">Create Post
                    </h1>

                    <form class="mx-5 my-5" method="POST" action="/company/post/create" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-5">
                            <label class="inline-flex items-baseline p-4 border-2 border-black rounded input-field">
                                <span class="flex-none leading-none select-none text-dusty-blue-darker">Title</span>
                                <div class="flex-1 leading-none">

                                    <input  type="text" class="w-full pl-1 bg-transparent focus:outline-none" name="title"/>
                                    @error('title')
                                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </label>
                        </div>

                        <label class="relative block p-3 mt-6 border-2 border-black rounded" htmlFor="name">

                            <x-form.textarea name="description" />
                            @error('description')
                                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                                    @enderror
                        </label>

                        <div class="mt-5">
                            <label class="inline-flex items-baseline p-4 border-2 border-black rounded input-field">
                                <span class="flex-none leading-none text-black select-none text-dusty-blue-darker ">paid</span>
                                <div class="flex-1 leading-none">
                                    <input  type="checkbox" class="w-full pl-1 ml-2 bg-transparent focus:outline-none" name="paid" />
                                    @error('paid')
                                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </label>
                        </div>


                        <div class="mt-5 shrink-0">
                            <img class="object-cover w-20 h-20 rounded-full" src="https://sahilnetic.xyz/sahilnetic.png" alt="Current profile photo" />
                        </div>
                        <label class="block pt-2" for="thumbnail">
                            <span class="sr-only t-2">Choose a Thumbnail</span>
                            <input type="file" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-300 file:text-zinc-900 hover:file:bg-rose-300 " name="thumbnail"  />
                            @error('thumbnail')
                                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                                    @enderror
                        </label>

                        <Button class="px-5 py-2 mt-5 font-black translate-y-2 border-2 border-b-4 border-l-4 border-black rounded-lg ">
                            Submit
                        </Button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>
    @include('components._footer')
</x-layout>
