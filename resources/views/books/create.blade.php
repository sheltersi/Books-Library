<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('books.store') }}"  enctype="multipart/form-data" >
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                 Book Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3
                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                 name="title" id="title" type="text" placeholder="Romio & Juliet"
                 value={{ old('title') }}>
                 <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
                
          

              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="author">
                 Author
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3
                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                 name="author" id="author" type="text" placeholder="Sarah Williams" required
                 value={{ old('author') }}
                 >
                 <x-input-error :messages="$errors->get('author')" class="mt-2" />
              </div>



              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="version">
               Book Version
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3
                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                 name="version" id="version" type="text" placeholder=" 1.0" required
                 value={{ old('version') }}
                 >
                 <x-input-error :messages="$errors->get('version')" class="mt-2" />
              </div>

              <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="year_published">
                Year Published
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3
                 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                 name="year_published" id="year_published" type="text" placeholder="2010" required
                 value={{ old('year_published') }}
                 >
              </div>
              <x-input-error :messages="$errors->get('year_published')" class="mt-2" />


              <div class="w-full md:w-full px-0 mb-6 md:mb-6 ml-0">
                <label class="block uppercase tracking-wide font-bold text-gray-700 text-sm mb-2" for="category">
                  Book Category
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-300 border border-gray-200 text-gray-700 
                  py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                  name="category" id="category"
                
                  >
                 
                  <option>{{ old('category') }}</option>
                  <option>Programming</option>
                    <option>Computers</option>
                    <option>Information Technology</option>
                    <option>Networks</option>
                    <option>Business IT</option>
                    <option>Commerce</option>
                    <option>Historical</option>
                    <option>Science</option>
                    <option>Accounting</option>
                    <option>Economics</option>
                    
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
              </div>

              <label class="block uppercase tracking-wide font-bold text-gray-700 text-sm mb-2" for="category">
               Add a comment
              </label>
            <textarea
                name="newbook"
                placeholder="{{ __('Add a comment') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('newbook') }}</textarea>
            <x-input-error :messages="$errors->get('newbook')" class="mt-2" />

              <label><h4>Add Book</h4></label>
              <input type="file" class="form-control" required name="book">
            
              <x-primary-button class="mt-4">{{ __('Add a new book') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>