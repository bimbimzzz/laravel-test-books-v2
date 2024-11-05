<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('pages.authors.index', compact('authors'));
    }

    public function create() {
        return view('pages.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors'
        ]);

        Author::create($request->all());
        return redirect()->route('pages.authors.index')->with('success', 'Author created successfully.');
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
    public function update(Request $request, string $author)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:authors,email,' . $author->id
        ]);

        $author->update($request->all());
        return redirect()->route('pages.authors.index')->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $author)
    {
        $author->delete();
        return response()->json(['success' => 'Author deleted successfully.']);
    }
}
