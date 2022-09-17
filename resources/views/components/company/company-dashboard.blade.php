<x-layout>
    <x-nav/>

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <main class="mt-24 profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
          ">
                <span id="blackOverlay" class="absolute w-full h-full bg-black opacity-50"></span>
            </div>
            <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="fill-current text-blueGray-200" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container px-4 mx-auto">
                <div class="relative flex flex-col w-full min-w-0 mb-6 -mt-64 break-words bg-white rounded-lg shadow-xl">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="flex justify-center w-full px-4 lg:w-3/12 lg:order-2">
                                <div class="relative mr-16">
                                    @if($company->logo)
                                    <img alt="..." src="{{ asset('storage/' . $company->logo) }}" class="absolute h-auto -m-16 -ml-20 align-middle border-none rounded-full shadow-xl lg:-ml-16 max-w-200-px">
                                    @else
                                    <img alt="..." src="/images/company.png" class="absolute h-auto -m-16 -ml-20 align-middle border-none rounded-full shadow-xl lg:-ml-16 max-w-200-px">
                                    @endif
                                </div>
                            </div>
                            <div class="w-full px-4 lg:w-4/12 lg:order-3 lg:text-right lg:self-center">
                                @if(auth()->user()->role == 'company' && $company->id = auth()->user()->company->id)
                                <div class="px-3 py-6 mt-32 sm:mt-0">
                                    <a href="/company/update" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none sm:mr-2" type="button">
                                        Update profile
                                    </a>
                                </div>
                                @endif
                            </div>
                            <div class="w-full px-4 lg:w-4/12 lg:order-1">
                                <div class="flex justify-center py-4 pt-8 lg:pt-4">
                                    <div class="p-3 mr-4 text-center">
                                        <span class="block text-xl font-bold tracking-wide uppercase text-blueGray-600">22</span><span class="text-sm text-blueGray-400">Friends</span>
                                    </div>
                                    <div class="p-3 mr-4 text-center">
                                        <span class="block text-xl font-bold tracking-wide uppercase text-blueGray-600">10</span><span class="text-sm text-blueGray-400">Photos</span>
                                    </div>
                                    <div class="p-3 text-center lg:mr-4">
                                        <span class="block text-xl font-bold tracking-wide uppercase text-blueGray-600">89</span><span class="text-sm text-blueGray-400">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 text-center">
                            <h3 class="mb-2 text-4xl font-semibold leading-normal text-blueGray-700">
                                {{$company->name }}
                            </h3>
                            <div class="mt-0 mb-2 text-sm font-bold leading-normal uppercase text-blueGray-400">
                                <i class="mr-2 text-lg fas fa-map-marker-alt text-blueGray-400"></i>
                                {{ $company->address }}
                            </div>

                            <div class="mb-2 text-blueGray-600">
                                <i class="mr-2 text-lg fas fa-university text-blueGray-400"></i> {{ $company->industry }}
                            </div>
                        </div>
                        <div class="py-10 mt-10 text-center border-t border-blueGray-200">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full px-4 lg:w-9/12">
                                    @if($company->description)
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                    {{ $company->description }}
                                    </p>
                                    @else
                                    <a href="#pablo" class="font-normal text-pink-500">add description</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    @include('components._footer')
</x-layout>
