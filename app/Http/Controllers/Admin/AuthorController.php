<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{


    public function all()
    {
        $authors = Author::with('Books')->get();
        return response()->view('admin/authors/authors', ['authors' => $authors]);
    }

    public function create(Request $request)
    {
        $message = false;
        if ($request->name) {
            if (Author::where('name', '=', $request->name)->count() == 0) {
                $author = new Author;
                $author->name = $request->name;
                $author->save();
                $message = 'Автор добавлен';
            } else {
                $message = 'Такой автор уже существует';
            }


        }
        return response()->view('admin/authors/create', ['message' => $message]);
    }

    public function edit($id, Request $request)
    {
        $message = false;
        $author = Author::find($id);

        if ($request->name) {
            $author->name = $request->name;
            $author->save();
            $message = 'Автор изменен';
        }
        return response()->view('admin/authors/edit', ['message' => $message, 'name' => $author->name, 'id' => $id]);
    }

    public function delete($id)
    {
        $message = 'Автор удален';
        $author = Author::find($id);

        if ($author->Books()->count() == 0) {

            $author->delete();

        } else {
            $message = 'У автора есть книги';
        }
        return response()->view('admin/authors/delete', ['message' => $message]);
    }


}

