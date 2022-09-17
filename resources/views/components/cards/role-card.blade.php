@props(['name'])
    <div class="flex flex-col flex-grow flex-shrink w-full p-6 text-center md:w-1/3">
        <div class="flex-1 overflow-hidden bg-white rounded-t rounded-b-none shadow">
            <a href="{{ $name }}/register" class="flex flex-wrap no-underline hover:no-underline">

                <div class="w-full px-6 text-xl font-bold text-gray-800">
                   {{ ucwords($name) }}
                </div>

            </a>
            <div class="flex justify-center">
            <img src="images/{{ $name }}-icon.png" width="200" height="200" >
            </div>
        </div>

        <div class="flex-none p-6 mt-auto overflow-hidden bg-white rounded-t-none rounded-b shadow">
            <div class="flex items-center justify-center">
                <a  href="{{ $name }}/register" class="px-8 py-4 mx-auto my-6 font-bold text-white transition duration-300 ease-in-out transform rounded-full shadow-lg lg:mx-0 hover:underline gradient focus:outline-none focus:shadow-outline hover:scale-105">
                    Register
</a>
            </div>

        </div>


    </div>

