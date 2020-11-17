@extends('admin.layout')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')
    @if (count($books) === 0)
        Список книг пуст
    @else

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Автор</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td><a href="{{ url('admin/books/edit/'.$book->id) }}">Редактировать</a></td>
                    <td><a href="{{ url('admin/books/delete/'.$book->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
