<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
	    return view('book.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {
        $newBook = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'user_id' => 1
        ]);

        return redirect('book/' . $newBook->id);
    }

    public function show(Book $book)
    {
        return view('book.show', [
            'book' => $book,
        ]);
    }


    public function edit(Book $book)
    {
        return view('book.edit', [
            "book" => $book,
            ]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release
        ]);

        return redirect('book/' . $book->id);
    }

    public function destroy(Book $book)
    {    {
        $book->delete();

        return redirect('/book');
    }
    }
}
