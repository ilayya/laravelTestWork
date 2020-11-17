<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    static $authors = [
        ['name' => 'Александр Пушкин', 'books' => [
            'Евгений Онегин',
            'Метель',
            'Борис Годунов',
            'Зимнее утро',
            'Пир во время чумы'
        ]],
        ['name' => 'Михаил Ломоносов', 'books' => [
            'Тамира и Селим'
        ]],
        ['name' => 'Фёдор Достоевский', 'books'=>[
            'Бедные люди',
            'Униженные и оскорблённые',
            'Преступление и наказание',
            'Идиот'
        ]],
        ['name' => 'Иван Тургенев', 'books' => [
            'Отцы и дети',
            'Ася',
            'Муму',
            'Записки охотника'
        ]],
        ['name' => 'Александр Островский'],
        ['name' => 'Лев Толстой']
    ];


    public function run()
    {
        foreach (self::$authors as $author) {
            $authorId = DB::table('authors')->insertGetId([
                'name' => $author['name']
            ]);

            if($authorId && isset($author['books'])){
                foreach ($author['books'] as $book){
                    DB::table('books')->insert([
                        'name' => $book,
                        'author_id' => $authorId
                    ]);
                }
            }
        }
    }
}
