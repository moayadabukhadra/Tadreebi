<x-layout>
    <x-nav />
    <div class="max-w-2xl p-16 mx-auto mb-24 bg-white border-2 rounded-xl mt-36 hover:bg-gray-100">

        <form method="POST" enctype="multipart/form-data" action="/student/update">
            @csrf
            @method('PATCH')
            <div class="grid gap-6 mb-6 lg:grid-cols-2">

                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                    <input type="text" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="address">
                    @error('address')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                    @enderror
                </div>


            </div>
            <div class="grid gap-6 mb-6 ">

                <div>
                    <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Summary</label>
                    <x-form.textarea name="summary" />
                    @error('summary')
                    <p class="text-xs italic text-red-500">{{ $message }}</p>
                    @enderror
                </div>


            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Profile Image</label>
                <input type="file" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="image">
                @error('image')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

    @include('components._footer')
</x-layout>
