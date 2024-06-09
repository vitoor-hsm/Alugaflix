<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();
    $conn = mysqli_connect("localhost", "root", "", "projeto");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $nome = trim($_POST['nome']);
            $genero = trim($_POST['genero']);
            $descricao = trim($_POST['descricao']);

            $sql = "UPDATE produto SET nome='$nome', genero='$genero', descricao='$descricao' WHERE id_produto=$id";

            $result = $conn->query($sql);
            
            if($result) {
                echo '<script>alert("Informações do produto atualizadas com sucesso!"); window.location.href = "../html/index.php"</script>';
            } else {
                echo '<script>alert("Erro ao atualizar as informações do produto!"); window.location.href = "../editarProduto.php?id='.$id.'"</script>';
            }
        }
    } else {
        echo "ID do produto não especificado";
    }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtualizarProdutos</title>
    
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
                    <form method="POST" action="editarProduto.php?id=<?php echo $id; ?>">
                    <label for="nome" id="fundo1">Nome do filme : </label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do filme" required maxlength="30">
                    <br>
                    <label for="genero" id="fundo2" >Gênero do filme :</label>
                    <input type="text" id="genero" name="genero" placeholder="Ação, drama, comédia, etc." required maxlength="30">
                    <br>
                    <label for="descricao">Descrição do filme :</label>
                    <input type="text" id="descricao" name="descricao" placeholder="Uma breve descrição (opcional)">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" value="Atualizar">
                    <a href="../html/index.php">Voltar para tela principal</a>
                </form>

</body>

</html>