<x-layout>
<main class="mt-24 mb-24">
<div class="flex items-center justify-center min-h-full px-4 py-12 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <img class="w-auto h-12 mx-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900">Sign in to your account</h2>

    </div>
    <form class="mt-8 space-y-6" action="/student/register" method="POST">
        @csrf
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
      <x-form.input name="name" type="text"/>
       <x-form.input name="email" type="email"/>
       <x-form.input name="password" type="password"/>
       <x-form.number-input name="gpa" type="number" min="0" max="4" step="0.1" />
</div>

      <select name="university" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <option>Select university</option>
        <option value="student" >uni 1</option>
        <option value="uni2">uni 2</option>
        <option value="uni3">uni3</option>
      </select>

      <select name="factualy" class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <option>Select Factualy</option>
        <option value="student">uni 1</option>
        <option value="uni2">uni 2</option>
        <option value="uni3">uni3</option>
      </select>




    <x-form.button/>
    </form>
  </div>
</div>
</main>

</x-layout>

