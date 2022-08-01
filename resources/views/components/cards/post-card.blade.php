@props(['post'])
<div class="flex items-center justify-center px-4 py-12 border-b-4 md:px-6 2xl:px-0 2xl:container 2xl:mx-auto ">
    <div class="flex flex-col items-start justify-start max-w-4xl rounded-xl">
        <div class="flex items-start justify-start mb-8">
            <p class="text-3xl font-semibold leading-7 text-gray-800 lg:text-4xl lg:leading-9 dark:text-white ">{{ $post->title }}</p>
        </div>
        <div class="flex flex-col items-start justify-start w-full p-8 bg-gray-50 dark:bg-gray-800">
            <div>
                <div class="flex flex-col justify-between w-full md:flex-row">
                    <div class="flex flex-row items-start justify-between">
                        <p class="text-xl font-semibold leading-normal text-gray-800 md:text-2xl dark:text-white">{{ $post->company->name}}</p>
                    </div>
                </div>
                <div id="menu" class="md:block">
                    <p class="w-full mt-3 text-base leading-normal text-gray-600 dark:text-white md:w-9/12 xl:w-5/6"></p>

                    <div class=" flex justify-start items-center flex-row space-x-2.5 ">

                        <p class="text-base font-medium leading-none text-gray-800 dark:text-white">{{ $post->created_at->diffForHumans() }}</p>

                    </div>
                </div>
            </div>

            <div class="flex flex-col items-start justify-start w-full py-8 bg-gray-50 dark:bg-gray-800 md:px-8">
                <div class="flex flex-col justify-between w-full md:flex-row">
                    <div class="flex flex-row items-start ">
                        <p class="text-xl font-medium leading-normal text-gray-800 md:text-2xl dark:text-white">{{ $post->company->industry->name }}</p>
                    </div>
                    <div class="mt-2 cursor-pointer md:mt-0">

                    </div>
                </div>
                <div id="menu2" class="hidden md:block">
                    <p class="w-full mt-3 text-base leading-normal text-gray-600 dark:text-white md:w-9/12 xl:w-5/6">{{ $post->description }}</p>
                    <div class="flex flex-row items-start justify-start mt-6 space-x-4">
                        <div class="mt-8">
                            <a class="px-8 py-4 text-black bg-blue-300 rounded-xl" href="#">Apply</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .carousel-cell {
        width: 150px;
        height: 150px;

        margin-right: 24px;
        counter-increment: carousel-cell;
    }

    .carousel-cell:before {
        display: block;
        width: 20%;
    }

    .flickity-slider {
        position: absolute;
        width: 100%;
        height: 100%;
        left: -260px !important;
    }

    .flickity-button {
        position: absolute !important;
        inset: 0 !important;
        top: 50% !important;
        left: 80% !important;
        background: white;
        border: 0px;
        color: #27272a;
    }

    .flickity-prev-next-button:hover {
        background-color: #27272a;
        color: white;
    }

    .flickity-prev-next-button.previous {
        visibility: hidden;
    }

    .flickity-prev-next-button.next {
        margin-left: 50px;
        width: 48px;
        height: 48px;
        visibility: hidden;
    }

    .flickity-enabled.is-draggable .flickity-viewport {
        cursor: none;
        cursor: default;
    }

    .flickity-prev-next-button .flickity-button-icon {
        margin-left: 2px;
        margin-top: 2px;
        width: 24px;
        height: 24px;
    }
</style>
