<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Editar</title>
</head>
<body>
    <div id="caixaDoFormulario">
        <h2 id="titulo">Editar livro</h2>
        <form action="{{route('books.update', $book->id)}}" method="post" id="formulario">
            @csrf
            @method('PUT')
            <div class="gruposDoFormulario">
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ $book->name }}">
            </div>
            <div class="gruposDoFormulario">
            <label for="author">Autor:</label>
            <input type="text" name="author" value="{{ $book->author }}">
            </div>
            <div class="gruposDoFormulario">
            <label for="amount">Quantidade:</label>
            <input type="number" name="amount" id="" value="{{ $book->amount }}">
            </div>
            <input type="submit" id="botao" value="Editar">
        </form>
    </div>
</body>
</html>