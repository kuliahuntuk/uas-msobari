<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|digits:4|integer',
        ]);

        Book::create($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return redirect()->back();
    }

}