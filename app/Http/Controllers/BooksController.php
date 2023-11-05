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
    public function index():Response
    {
return response('Page to display Books list');
    }

    /**
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
        
        $validated= $request->validate([
            "title"=> "required|string|max:50",
            "author"=> "required|string|max|50",
            "version"=> "required|numeric",
            "year_published"=> "required|numeric",
        ]);

        $request->user()->books()->create($validated);
        return redirect(route("dashboard"));
    }

    /**
     * Display the specified resource.
     */
    public function show(books $books)
    {
        //
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
