<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public $timestamps = false;
    protected $table = "books";

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