<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
</head>
<body>
@section('navbar')
    <div class="navbar">
        <a class="navElement"  href="{{ url('/') }}">На главную</a>
        <a class="navElement"  href="{{ url('admin/authors') }}">Список авторов</a>
        <a class="navElement"  href="{{ url('admin/books') }}">Список книг</a>
        <a class="navElement"  href="{{ url('admin/authors/create') }}">Добавить автора</a>
        <a class="navElement"  href="{{ url('admin/books/create') }}">Добавить книгу</a>
    </div>
@show

<div class="container">
    @yield('content')
</div>
<style>
    .navbar{
        width: 60%;
        margin: auto;
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .navElement{
        margin: 20px;
        padding: 10px;
        border: 1px solid grey;
        border-radius: 4px;
        text-decoration: none;
    }

    .container{
        margin: auto;
        width: 60%;
    }

    form,table{
        width: 100%;
    }
    td, th{
        border: 1px solid grey;
        padding: 0.5rem;
    }

</style>

</body>
</html>
