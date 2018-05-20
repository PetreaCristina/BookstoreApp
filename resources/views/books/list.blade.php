@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default js-book-container">
                <div class="panel-heading">List books</div>
                  <div class="js-book-container">
                   
                      @foreach($books as $book)
                           @include('books.partialList', ['book' => $book, 'exists' => 1])
                      @endforeach

                  </div>

            </div>
        </div>
    </div>
</div>
@endsection



