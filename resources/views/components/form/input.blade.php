@props(['name','type'])
<div>
          <label for="{{ $name }}" class="sr-only">{{ $name }}</label>
          <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" autocomplete="{{ $name }}" required class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
          placeholder="{{ $name }}">
        </div>
