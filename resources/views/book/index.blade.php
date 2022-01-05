@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Book!</h1>
                        <p>Enjoy reading our books. Click on a book!</p>
                    </div>
                    <div class="col-4">
                        <p>Add new Book</p>
                        <a href="/book/create/book" class="btn btn-primary btn-sm">Add Book</a>
                    </div>
                </div>
                @forelse($books as $book)
                    <ul>
                        <li><a href="./book/{{ $book->id }}">{{ ucfirst($book->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No books available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
