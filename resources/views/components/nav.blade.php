    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full text-white gradient">
        <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
        @if(auth()->check() )
            <div class="flex items-center pl-4">
                @if(auth()->user()->role == 'student')
                <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="/{{auth()->user()->role}}/dashboard/{{auth()->user()->student->id}}">
                @else
                <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="/{{auth()->user()->role}}/dashboard/{{auth()->user()->company->id}}">
                @endif
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off" d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                    </svg>
                    TADREEBI
                </a>
            </div>
        @else
             <div class="flex items-center pl-4">
                <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="/">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                        <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                        <path class="plane-take-off" d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
                    </svg>
                    TADREEBI
                </a>
            </div>
         @endif
            <div class="block pr-4 lg:hidden">
                <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">

                <ul class="items-center justify-end flex-1 list-reset lg:flex">
                    @auth
                    @if(auth()->check() )
                    <li class="mr-3">
                        <p class="inline-block px-4 py-2 font-bold text-black no-underline" >Welcome {{ auth()->user()->name }}</p>
                    </li>

                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="/logout">Logout</a>
                    </li>
                    @if(auth()->user()->role == 'student')
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="/student/internships">Internships </a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="/student/applications">My Applications</a>
                    </li>
                    @endif
                    @if(auth()->user()->role == 'company')
                    <li class="mr-3">
                        <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="/company/applications">Applications </a>
                    </li>
                    @endif
                </ul>
                @endif
                @else
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="/login">Login</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block px-4 py-2 text-black no-underline hover:text-gray-800 hover:text-underline" href="#role">Register</a>
                </li>

                @endauth


            </div>
        </div>
        <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
