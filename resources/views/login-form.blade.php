<x-layout>

    <section class="w-full h-full mt-16 mb-16 ml-40 gradient-form md:h-screen">
        <div class="container h-full px-6 py-12">
            <div class="flex flex-wrap items-center justify-center h-full text-gray-800 g-6">
                <div class="xl:w-10/12">
                    <div class="block bg-white rounded-lg shadow-lg">
                        <div class="lg:flex lg:flex-wrap g-0">
                            <div class="px-4 lg:w-6/12 md:px-0">
                                <div class="md:p-12 md:mx-6">
                                    <div class="text-center">
                                        <img class="w-48 mx-auto" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" alt="logo" />
                                        <h4 class="pb-1 mt-1 mb-12 text-xl font-semibold">Tadreebi</h4>
                                    </div>
                                    <form method="POST" action="/login">
                                        @csrf

                                        <p class="mb-4">Login</p>

                                        <x-form.input name="email" type="email" />
                                        @error('email')
                                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                                        @enderror
                                        <x-form.input name="password" type="password" />
                                        @error('password')
                                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                                        @enderror


                                        <div class="pt-1 pb-1 mb-12 text-center">
                                            <x-form.button name="Sign In" type="submit" />
                                            <a class="text-gray-500" href="#!">Forgot password?</a>
                                        </div>
                                        <div class="flex items-center justify-between pb-6">
                                            <p class="mb-0 mr-2">Dont have account?<a href="/student/register" class="text-blue-700 ">Register</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none" style="
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
              ">
                                <div class="px-4 py-6 text-white md:p-12 md:mx-6">
                                    <h4 class="mb-6 text-xl font-semibold">We are more than just a company</h4>
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>
