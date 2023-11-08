<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
return view("books.index",[
    'books'=>Books::with('user')->latest()->get(),
]);

  }  /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request):View
    {


        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $data = new Books();
        
        $validated= $request->validate([
            "title"=> "required|string|max:100",
            "author"=> "required|string|max:20",
            "version"=> "required|numeric",
            "category"=> "required",
            "newbook"=> "required|string|min:5",
            "year_published"=> "required|numeric",
          
        ]);

       
        

        $request->user()->books()->create($validated);

        if($request->file('book')){
            $file= $request->file('book');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['book']= $filename;
        }

        // $data->save();
        return redirect(route("dashboard"));
    }

    /**
     * Display the specified resource.
     */
    public function show(books $book)
    {
        return view("books.show",[
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books $books)
    {
        //
    }
}
