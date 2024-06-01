<?php
session_start();
    $conn = mysqli_connect("localhost", "root", "", "projeto");

    $nome = trim($_POST['nome']);
    $genero = trim($_POST['genero']);
    $descricao = trim($_POST['descricao']);
    $sql = "INSERT INTO produto 
    (nome,genero,descricao) 
    VALUES 
    ('$nome', '$genero', '$descricao')";

    $result = $conn -> query($sql);
    if($result){
        echo '<script>alert("Produto cadastrado com sucesso!!"); window.location.href = "../html/index.php"</script>';
    }else{
        echo '<script>alert("ERROR"); window.location.href = "../cadastrarProdutos.php"</script>';
    }
    
?>