
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
        <label for="name">Имя автора</label>
        <br>
        <br>
        <input id="name" type="text" name="name">
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form>
@endsection
