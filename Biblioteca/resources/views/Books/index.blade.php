<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="{{ asset('css/lista.css') }}">
    <script src="https://kit.fontawesome.com/2e3161fd5b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="cabeçalho">
        <h1 id="titulo">Livros cadastrados</h1>
        <a id="botaoCadastrar" href="{{route('books.create')}}">Cadastrar livro</a>
        @if (session()->has('sucesso'))
            <p id="sucesso">{{ session()->get('sucesso')}}</p>
        @elseif (session()->has('erro'))
            <p id="erro">{{ session()->get('erro')}}</p>
        @else
            <p> </p>
        @endif
        
        <hr>
    </div>
    <table>
        <tr>
            <th id="tituloTabela">NOME</th>
        </tr>
        @foreach ($books as $book)
            <tr id="linhasdatabela">
                <td>{{$book->name}}</td>
                <td><a href="{{route('books.edit', $book->id)}}"><i class="fa-solid fa-pen"></i></a></td>
                <td><form action="{{route('books.destroy', $book->id)}}" method="post" onsubmit="return confirm('Tem certeza que deseja deletar este livro?');"> @csrf @method('DELETE') <button type="submit"><i class="fa-regular fa-trash-can"></i></button></form></td>
                <td><a href="{{route('books.show', $book->id)}}"><i class="fa-regular fa-eye"></i></a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>