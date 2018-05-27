<?php
namespace App\Http\Controllers;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use Session;

class BooksController extends Controller{
	
	public function getAdd()
	{
		return view('books.add');
	}

	public function postAdd(Request $request)
	{		
		$this->validate($request, 
		[
	        'title'	=> 'required',
	        'book_description'	=> 'required',
	        'book_cover'	=> 'required',
	        'author_name'	=> 'required',
	        'genre'	=> 'required',
	        'publication_year'	=> 'required|numeric',
	        'location_download'	=> 'required',
	    ]);

	    $input = $request->all();
	    unset($input['_token']);
	    
	    $book = new Book();
	    foreach ($input as $key => $value) {
	    	$book->$key = $value;
	    }

	    //$saved = 'public/images/'.$request->input('book_cover');
	    //$img = Image::make($saved);

	    $book->save();
	    return redirect()->route('getListBook')->with('success', 'Book added!');
	}

	public function getList()
	{
		$allBooks = Book::all();

		return view('books.list')->with('books',$allBooks);
	}

	public function details()
	{

	}

	public function delete($id)
	{
		 if(Book::deleteBook($id))
		 return redirect()->route('getListBook')->with('success', 'Book deleted!');
	}

	public function edit($id)
    {
		$book= Book::find($id);
		return view('books.edit')->with('book', $book);
	}
	public function update($id, Request $request)
   {
	$book = Book::findOrFail($id);
	   $this->validate($request, 
	   [
		   'title'	=> 'required',
		   'book_description'	=> 'required',
		   'book_cover'	=> 'required',
		   'author_name'	=> 'required',
		   'genre'	=> 'required',
		   'publication_year'	=> 'required|numeric',
		   'location_download'	=> 'required',
	   ]);

	    $input = $request->all();
		$book->fill($input)->save();
		//Session::flash('flash_message', 'Book successfully edit!');
        return redirect()->route('getListBook')->with('success', 'Book edit!');
   }

}