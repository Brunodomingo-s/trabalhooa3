<?php
    include("conexao.php");

    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO usuario(id, nome, senha)
            VALUES ('$id, '$nome', '$senha')";
?>