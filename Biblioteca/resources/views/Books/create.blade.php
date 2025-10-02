<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Cadastrar</title>
</head>
<body>
    <div id="caixaDoFormulario">
        <h2 id="titulo">Cadastrar livro</h2>
        <form action="{{route('books.store')}}" method="post" id="formulario">
            @csrf
            <div class="gruposDoFormulario">
                <label for="name">Nome:</label>
                <input type="text" name="name">
            </div>
            <div class="gruposDoFormulario">
                <label for="author">Autor:</label>
                <input type="text" name="author">
            </div>
            <div class="gruposDoFormulario">
            <label for="amount">Quantidade:</label>
            <input type="number" name="amount" id="">
            </div>
            <input type="submit" id="botao" value="Cadastrar">
        </form>
    </div>
</body>
</html>