<?php
    $servidor="localhost";
    $usuario="admin";
    $senha="120404";
    $dbname="criarconta";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("houve um erro: ".mysqli_connect_error());
    }
?>