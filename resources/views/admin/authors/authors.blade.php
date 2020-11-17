@extends('admin.layout')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')
    @if (count($authors) === 0)
        Список авторов пуст
    @else
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Количество книг</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{$author->name}}</td>
                    <td>{{$author->Books->count()}}</td>
                    <td><a href="{{ url('admin/authors/edit/'.$author->id) }}">Редактировать</a></td>
                    <td><a href="{{ url('admin/authors/delete/'.$author->id) }}">Удалить</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
