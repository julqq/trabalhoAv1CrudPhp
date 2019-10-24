<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "sistemaempresa"; //nome do banco de dados recomendado
    $conexao = mysqli_connect($host,$user,$pass,$banco) or die(mysql_error());

?>