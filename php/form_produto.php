<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrarProdutos</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/login.css">
    <link rel="stylesheet" href="../estilos/media-query.css">
    <link rel="stylesheet" href="../estilos/adicionar.css">
</head>

<body>
    <main>
        <section id="login">
            <div id="imagem">

            </div>
            <div id="formulario">
                <h1>Adicione uma Sugestão</h1>
                <p>
                    Adicione algum filme que gostaria de assistir em nossa plataforma e em breve ele será adicionado </p>
                <form method="POST" action="cadastrarProdutos.php">
                    <label id="fundo1">Nome do filme : 
                    </label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do filme" required maxlength="30">
                    <br>
                    <label id="fundo2" >Gênero do filme :</label>
                    <input type="text" id="genero" name="genero" placeholder="Ação, drama, comédia, etc." required maxlength="30">
                    <br>
                    <label>Descrição do filme :</label>
                    <input type="text" id="descricao" name="descricao" placeholder="Uma breve descrição (opcional)">
                    <br>
                    <input type="submit" value="Cadastrar">
                    <a href="../html/index.php">Voltar para tela principal</a>
                </form>

</body>

</html>