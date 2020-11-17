<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;


class BookController extends Controller
{




    public function all()
    {
        return response()->view('admin/books/books', [
            'books' => Book::join('authors','books.author_id','=', 'authors.id')
                ->select('books.*', 'authors.name as author')
                ->get()
        ]);
    }

    public function create(Request $request){

        $message = false;
        if($request->name){
            if(Book::where('name','=', $request->name)->count() == 0){
                $book = new Book;
                $book->name = $request->name;
                $book->author_id = $request->author_id;
                $book->save();
                $message = 'Книга добавлена';
            } else {
                $message = 'Такая книга уже существует';
            }
        }
        $authors = Author::all();

        return response()->view('admin/books/create', ['message' => $message,'authors' => $authors]);
    }

    public function edit($id, Request $request){
        $message = false;
        $book =  Book::find($id);

        if($request->name && $request->author_id){
            $book->name = $request->name;
            $book->author_id = $request->author_id;
            $book->save();
            $message = 'Книга изменена';
        }
        $authors = Author::all();


        return response()->view('admin/books/edit',
            ['message' => $message, 'book' => $book, 'id'=> $id ,'authors' => $authors]);
    }

    public function delete($id){

        $author =  Book::find($id);
        $author->delete();
        $message = 'Книга удалена';

        return response()->view('admin/books/delete', ['message' => $message]);
    }



}

