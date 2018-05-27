@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit book</div>
{!! Form::model($book, [
    'method' => 'PATCH',
    'route' => ['update', $book->id]   
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('book_description', 'Book Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('book_description', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('book_cover', 'Book Cover:', ['class' => 'control-label']) !!}
    {!! Form::file('book_cover', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('author_name', 'Author Name:', ['class' => 'control-label']) !!}
    {!! Form::text('author_name', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('genre', 'Genre:', ['class' => 'control-label']) !!}
    {!! Form::text('genre', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('publication_year', 'Publicationb Year:', ['class' => 'control-label']) !!}
    {!! Form::number('publication_year', null, ['class' => 'form-control','required' => 'required', 'min'=>"1200", 'max'=>"2018"]) !!}
</div>

<div class="form-group">
    {!! Form::label('location_download', 'Location Download:', ['class' => 'control-label']) !!}
    {!! Form::text('location_download', null, ['class' => 'form-control','required' => 'required']) !!}
</div>
{!! Form::submit('Update Book', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
            </div>
        </div>
    </div>
</div>
@endsection
