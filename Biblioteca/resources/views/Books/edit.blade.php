<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h2>Editar livro</h2>
    <form action="{{route('books.update', $book->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $book->name }}">
        <label for="author">Autor:</label>
        <input type="text" name="author" value="{{ $book->author }}">
        <label for="amount">Quantidade:</label>
        <input type="number" name="amount" id="" value="{{ $book->amount }}">
        <input type="submit" value="Editar">
    </form>
</body>
</html>