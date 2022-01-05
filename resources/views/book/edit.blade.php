@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/book" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Book</h1>
                    <p>Edit and submit this form to update a book</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Book Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Book Title" value="{{ $book->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="author">Book Author</label>
                                <input type="text" id="author" class="form-control" name="author"
                                       placeholder="Enter Book Author" value="{{ $book->author }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="release">Book release date</label>
                                <input type="text" id="release" class="form-control" name="release"
                                       placeholder="Enter Book release Date" value="{{ $book->release }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Book
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
