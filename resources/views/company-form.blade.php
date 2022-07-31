<x-layout>
<main class="mt-24 mb-24">
<div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <img class="w-auto h-12 mx-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">Sign in to your account</h2>

    </div>
    <form class="mt-8 space-y-6" action="/company/register" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
      <div class="space-y-5 rounded-md shadow-sm">
      <x-form.input name="name" type="name"/>
       <x-form.input name="email" type="email"/>
       <x-form.input name="password" type="password"/>
       <x-form.input name="adress" type="text"/>
        <x-form.input name="phone" type="text"/>
    <x-form.input name="website" type="url"/>
    <x-form.input name="industry" type="text"/>
    <x-form.textarea name="description"/>



</div>



    <x-form.button/>
    </form>
  </div>
</div>
</main>

</x-layout>

