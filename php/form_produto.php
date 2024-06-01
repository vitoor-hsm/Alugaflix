<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #2d2b2b;
            color: white;
        }
        form input[type="text"]{
            border-radius: 10px;
            padding: 6px;
        }
        form input[type="submit"] {
            width: calc(10% - 0px);
            padding: 5px;
            margin: 10px 0;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="cadastrarProdutos.php">
        <label>Nome:</label>
        <input type="text" id="nome" name="nome">
        <label>Gênero:</label>
        <input type="text" id="genero" name="genero">
        <label>Descrição:</label>
        <input type="text" id="descricao" name="descricao">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>