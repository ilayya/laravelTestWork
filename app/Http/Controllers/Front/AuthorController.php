<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;



class AuthorController extends Controller
{


    public function index()
    {
        $authors = Author::with('Books')->get();
        return response()->view('front/index', ['authors' => $authors]);
    }



}

