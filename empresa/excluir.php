<?php
require('conexao.php');


$codigo = $_GET['codigo']; 
$sql= "DELETE from empresas where codigo=$codigo";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

echo "Usuario excluido com sucesso";
header('refresh: 2 , url=buscar.php');
?>