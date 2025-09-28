<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h2>Cadastrar livro</h2>
    <form action="{{route('books.store')}}" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <label for="author">Autor:</label>
        <input type="text" name="author">
        <label for="Amount">Quantidade:</label>
        <input type="number" name="Amount" id="">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>