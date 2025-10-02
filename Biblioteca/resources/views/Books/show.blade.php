<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>{{$book->name}}</title>
</head>
<body>
    <div id="detalhesLivro">
        <h1 id="titulo">{{$book->name}}</h1>
        <h3 class="tituloDaInfor">Autor</h3>
        <p>{{$book->author}}</p>
        <h3 class="tituloDaInfor">Quantidade</h3>
        <p>{{$book->amount}}</p>
        <a href="{{ route('books.index') }}" id="botao">Voltar</a>
    </div>
</body>
</html>