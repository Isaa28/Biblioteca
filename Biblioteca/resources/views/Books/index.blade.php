<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Livros cadastrados</h1>
    <a href="{{route('books.create')}}">Cadastrar livro</a>
    <hr>
    <table>
        <tr>
            <th>Nome</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{$book->name}}</td>
                <td><a href="{{route('books.edit', $book->id)}}">✏️</a></td>
                <td><form action="{{route('books.destroy', $book->id)}}" method="post"> @csrf @method('DELETE') <input type="submit" value="🗑️"></form></td>
            </tr>
        @endforeach
    </table>
</body>
</html>