<html>
<head>
    <title>Список авторов</title>

</head>
<body>

    <div class="navbar">
        <a class="navElement"  href="{{ url('admin/authors') }}">Администрирование списка</a>
    </div>


<div class="container">
    <dl>
        @foreach($authors as $author)
            <dt>{{$author->name}}</dt>
            @foreach($author->Books as $book)
                <dd>{{$book->name}}</dd>
            @endforeach
        @endforeach
    </dl>
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

    dt{
        font-size: 1.2em;
        margin: 20px 0;

    }


</style>

</body>
</html>
