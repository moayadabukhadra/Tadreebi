<x-layout>
    <x-nav />
    <div class="flex items-center justify-center">
        <div class="inline-flex mt-24 shadow-md hover:shadow-lg focus:shadow-lg">
            <a href="/student/applications" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Go Back</a>
            <a href="/student/internships" class="rounded-xl inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Explore Internships</a>
        </div>
    </div>


    <div class="mt-8 overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Applicant Response Information</h3>
            <p class="max-w-2xl mt-1 text-sm text-gray-500">Personal details and application.</p>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Post Title</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $application->internShipPost->title }}</dd>
                </div>
                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Application for</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $application->internShipPost->company->name }}</dd>
                </div>
                <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Status</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $application->status }}</dd>
                </div>
                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">FeedBack</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $application->feedback }} </dd>

                </div>
                <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <ul role="list" class="border border-gray-200 divide-y divide-gray-200 rounded-md">

                            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                <div class="flex items-center flex-1 w-0">
                                    <!-- Heroicon name: solid/paper-clip -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="flex-1 w-0 ml-2 truncate"> {{ $application->student->name }} resume</span>
                                </div>
                                <div class="flex-shrink-0 ml-4">
                                    <a href="/company/resume/{{ $application->id }}" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                                </div>
                            </li>
                        </ul>
                    </dd>
                </div>
                @if($application->status != 'pending')
                <p class="flex justify-center text-right text-black -px-36">Propose to the university for this internship</p>
                <div class="flex justify-center ">

                <button class="px-4 py-2 mb-16 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700" type="submit">

                            Submit

                        </button>

                </div>
                @endif
        </div>
        </dl>
    </div>

    @include('components._footer')
</x-layout>
