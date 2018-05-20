<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $timestamps = false;
    protected $table = "books";
    protected $fillable = ['title', 'book_description', 'book_cover', 'author_name', 'genre', 'publication_year', 'location_download'];
    public static function deleteBook($id)
    { 
        $book = Book::find($id);
        if($book)
        {
            $book->delete();
            $success = true;
        }
        else
            $success = false;
    return $success;
    }
}