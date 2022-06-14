<?php

include("conexao.php");

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro(Nome, Nascimento, Email, Senha) VALUES ('$nome', '$nascimento', '$email', '$senha')";

if(mysqli_query($conexao, $sql))
    echo "Cadastro feito com sucesso!";

else
    echo "Erro!".mysqli_connect_error($conexao);

mysqli_close($conexao);

?>
