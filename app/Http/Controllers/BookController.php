<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.books.index', compact('books'));
    }

    public function create() {

        return view('pages.books.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'serial_number' => 'required|unique:books',
            'published_at' => 'required|date',
            'author_id' => 'required'
        ]);

        Book::create($request->all());
        return redirect()->route('pages.books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'serial_number' => 'required|unique:books,serial_number,' . $book->id,
            'published_at' => 'required|date',
            'author_id' => 'required'
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $book)
    {
        $book->delete();
        return response()->json(['success' => 'Book deleted successfully.']);
    }
}
