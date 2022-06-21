<?php

    $servidor = "localhost";
    $bdname = "formulario";
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bdname);

    if(!$conexao)
      die("Problemas com a conexão com o banco de dados. Descrição do problema: " . mysqli_connect_error());
    echo "Conexão realizada com sucesso!";
?>