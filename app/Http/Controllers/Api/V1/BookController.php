<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Book;


class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function all()
    {

        $books = Book::join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.*', 'authors.name as author')
            ->get();


        return response()->json($books, 200);
    }

    public function one($id)
    {

        $book = Book::where('books.id', '=', $id)
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.*', 'authors.name as author')
            ->firstOrFail();


        return response()->json($book, 200);
    }

    public function update(Request $request)
    {
       if(isset($request->id) && isset($request->name) && isset($request->author_id)){
           $book = Book::find($request->id);
           $book->name = $request->name;
           $book->author_id = $request->author_id;
           $book->save();

           return response()->json($book, 200);
       } else {
           return response()->json([], 400);
       }
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return response()->json(['result' => 'ok'], 200);
    }


}
