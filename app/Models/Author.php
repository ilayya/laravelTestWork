<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class Author extends Model
{
    protected $table = 'authors';

    public function Books(){
        return $this->hasMany('App\Models\Book', 'author_id', 'id');
    }
}

