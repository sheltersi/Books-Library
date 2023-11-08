<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @forelse($books as $book)
                <div class="p-6 flex space-x-2">
                    
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                            
                                <div><a href="{{ route('books.show',[$book]) }}">{{ $book->title }}</a></div>
                                <div class="text-brown-600">By {{ $book->author }}</div>
                                <div>Version {{ $book->version }}</div>
                                <div class="text-green-600">{{ $book->year_published }}</div>
                              
                                <small class="ml-2 text-sm text-gray-600">{{ $book->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $book->message }}</p>
                    </div>
                </div>
                @empty
                <h1 class="text-3xl font-extrabold"> There are no books yet</h1>
        

           @endforelse
        </div>
    </div>
</x-app-layout>