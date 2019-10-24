<?php
    require('conexao.php');

    for ($i = 1; $i <= 20; $i++) {
        

    



    $sql = "INSERT INTO empresas(
    nome_fantasia,
    cep,
    complemento,
    responsavel,
    tipo_de_empresa,
    endereco,
    crt,
    bairro,
    email,
    cnpj,
    razao_social,
    insc_est,
    cidade,
    telefone,
    inc_municipal,
    numero,
    estado,
    fax) VALUES('$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i','$i');";

mysqli_query($conexao,$sql);}
mysqli_close($conexao);




?>