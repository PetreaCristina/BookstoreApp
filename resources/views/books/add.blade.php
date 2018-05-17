@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add book</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('postAddBook')}}" method="post">
                        <fieldset>
                        {!! csrf_field() !!}
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="title">Title</label>  
                          <div class="col-md-5">
                            <input id="title" name="title" type="text" placeholder="Title" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="book_description">Book description</label>  
                          <div class="col-md-5">
                            <input id="book_description" name="book_description" type="text" placeholder="Book description" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="book_cover">Book cover</label>  
                          <div class="col-md-5">
                            <input type="file" name="book_cover" required>
                         <!--    <input id="book_cover" name="book_cover" type="text" placeholder="Book cover" class="form-control input-md" required>       -->                      
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="author_name">Author name</label>  
                          <div class="col-md-5">
                            <input id="author_name" name="author_name" type="text" placeholder="Author name" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="Genre">Genre</label>  
                          <div class="col-md-5">
                            <input id="genre" name="genre" type="text" placeholder="Genre" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="publication_year">Publication year</label>  
                          <div class="col-md-5">
                            <input id="publication_year" name="publication_year" type="number" step="1" min="1200" max="2018" placeholder="Publication year" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="location_download">Location download</label>  
                          <div class="col-md-5">
                            <input id="location_download" name="location_download" type="text" placeholder="Location download" class="form-control input-md" required>                            
                          </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="singlebutton"></label>
                          <div class="col-md-4">
                            <button id="singlebutton" class="btn btn-primary">Save</button>
                          </div>
                        </div>

                        </fieldset>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
