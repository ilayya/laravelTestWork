
@extends('admin.layout')

@section('title', 'Page Title')

@section('navbar')
    @parent
@endsection

@section('content')



    <form  method="GET">
        @if(strlen($message) > 0)
            <p style="color: red;"> {{$message}} </p>
        @endif
        <label for="name">Название книги</label>
        <br>
        <br>
        <input id="name" type="text" name="name">
        <br>
        <br>
        <label for="name">Имя автора</label>
            <br><br>
        <select name="author_id">
            @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Отправить">
    </form>
@endsection
