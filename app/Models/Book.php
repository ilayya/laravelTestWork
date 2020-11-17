<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    protected $table = 'books';

    public function authorName(){
        return $this->belongsTo('App\Models\Author',  'author_id', 'id')->first()->name;
    }


}
