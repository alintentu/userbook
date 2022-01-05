@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">reales date</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
              </tr>
             </thead>
             <tbody>
               <tr>
                 <td>{{ ucfirst($book->title) }}</td>
                 <td>{!! $book->author !!}</td>
                 <td>{!! $book->release !!}</td>
                 <td><a href="/book/{{ $book->id }}/edit" class="btn btn-outline-primary">Edit Book</a></td>
                 <td>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Book</button>
                    </form>
                </td>
               </tr>
            </tbody>
          </table>
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/book" class="btn btn-outline-primary btn-sm">Go back</a>
            </div>
        </div>
    </div>
@endsection
