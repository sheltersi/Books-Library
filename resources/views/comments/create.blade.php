<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
<form method="POST" action="{{ Route('comments.store') }}">
    <label class="block uppercase tracking-wide font-bold text-gray-700 text-sm mb-2" for="category">
       Leave a comment 
       </label>
     <textarea
         name="newbook"
         placeholder="{{ __('Add a comment') }}"
         class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
          focus:ring-opacity-50 rounded-md shadow-sm"
     >{{ old('newbook') }}</textarea>
     <x-input-error :messages="$errors->get('newbook')" class="mt-2" />

</form>




    </x-app-layout>