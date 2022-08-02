<x-layout>

<section class="w-full h-full mt-16 ml-40 mb-96 gradient-form md:h-screen">
  <div class="container h-full px-6 py-12">
    <div class="flex flex-wrap items-center justify-center h-full text-gray-800 g-6">
      <div class="xl:w-10/12">
        <div class="block bg-white rounded-lg shadow-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="px-4 lg:w-6/12 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                  <img
                    class="w-48 mx-auto"
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    alt="logo"
                  />
                  <h4 class="pb-1 mt-1 mb-12 text-xl font-semibold">We are The Lotus Team</h4>
                </div>
                <form action="/company/register" method="POST" enctype="multipart/form-data">
                    @csrf

                  <p class="mb-4">Register</p>
                  <x-form.input name="name" type="text"/>
                  <x-form.input name="email" type="email"/>
                  <x-form.input name="password" type="password"/>
                  <x-form.input name="phone" type="phone"/>
                  <x-form.input name="adress" type="text"/>
                  <x-form.input name="website" type="text"/>
                  <x-form.textarea name="description" type="text"/>
                    <x-form.input name="logo" type="file"/>
                  <select class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  name="industry_id">
                    <option value="" >Select Industry</option>
                    @foreach($industries as $industry)
                      <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                    @endforeach
                  </select>





                  <div class="pt-1 pb-1 mb-12 text-center">
                    <x-form.button name="Sign Up" type="submit"/>
                    <a class="text-gray-500" href="#!">Forgot password?</a>
                  </div>
                  <div class="flex items-center justify-between pb-6">
                   <p class="mb-0 mr-2">Already have account?<a href="#" class="text-blue-700 ">login</a></p>
                  </div>
                </form>
              </div>
            </div>
            <div
              class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
              style="
                background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
              "
            >
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
