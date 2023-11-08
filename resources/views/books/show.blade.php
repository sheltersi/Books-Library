<div class="container shadow-xl rounded-lg pl-2 pt-2 pb-2 bg-gray-400 w-auto mt-8">
    <h1 class="font-bold">{{ ucwords($book->title) }}</h1>
    <h1 class="text-blue-900">{{ ucwords($book->category) }}</h1>
  <p>By: {{ $book->author }}</p>
  <p>Version: {{ $book->version }}</p>
  <p>Year Published: {{ $book->year_published }}</p>
    <button class="bg-blue-500 rounded-xl px-4 py-2 text-white hover:bg-sky-700 mt-4 hover:text-red-500">
        {{-- <a href="{{ route('posts.edit', [$post]) }}" --}}
        >
            Edit Post  <i class="fa-solid fa-file-pen"></i></a>
    </button>
   
    
</div>