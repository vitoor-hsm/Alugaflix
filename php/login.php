<?php
// session_start inicia a sessão
//session_start();
//conexão
$conn = mysqli_connect("localhost", "root", "", "projeto");

if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL.";   
    exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";


// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$senha = $_POST['senha'];
//consulta para verificar se o email e a senha conferem
	$sql = "SELECT * FROM usuario
				WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows ($result) > 0 ){
	$row = mysqli_fetch_array($result);
	$_SESSION['nome'] = $row['nome'];
	$_SESSION['id_usuario'] = $row['id_usuario'];
	header('location: ../html/index.php');	
}else{
	echo("Usuário ou senha inválido!!");
	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);
	header('location: ../html/login.html');
	// removendo todas as sessões
	session_start();
	session_destroy();
	unset( $_SESSION );
}
?>