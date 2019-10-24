<?php
require('conexao.php');

$codigo = $_GET['codigo']; 

$sql = "SELECT codigo, nome_fantasia, cep, complemento, responsavel, tipo_de_empresa, endereco, crt, bairro, email, cnpj, razao_social, insc_est, cidade, telefone, inc_municipal, numero, estado, fax FROM empresas WHERE codigo = $codigo;";

$resultado = mysqli_query($conexao,$sql);


while($linha = mysqli_fetch_assoc($resultado)){
    //echo $linha;
    $codigo = $linha['codigo'];
    $nomeFantasia = $linha['nome_fantasia'];
    $cep = $linha['cep'];
    $complemento = $linha['complemento'];
    $responsavel = $linha['responsavel'];
    $tipo_de_empresa = $linha['tipo_de_empresa'];
    $endereco = $linha['endereco'];
    $crt = $linha['crt'];
    $bairro = $linha['bairro'];
    $email = $linha['email'];
    $cnpj = $linha['cnpj'];
    $razao_social = $linha['razao_social'];
    $insc_est = $linha['insc_est'];
    $cidade = $linha['cidade'];
    $telefone = $linha['telefone'];
    $inc_municipal = $linha['inc_municipal'];
    $numero = $linha['numero'];
    $estado = $linha['estado'];
    $fax = $linha['fax'];
   

};
mysqli_close($conexao);

// echo $codigo,'<br>',
// $nomeFantasia,'<br>',
// $cep,'<br>',
// $complemento,'<br>',
// $responsavel,'<br>',
// $tipo_de_empresa,'<br>',
// $endereco,'<br>',
// $crt,'<br>',
// $bairro,'<br>',
// $email,'<br>',
// $cnpj,'<br>',
// $razao_social,'<br>',
// $insc_est,'<br>',
// $cidade,'<br>',
// $telefone,'<br>',
// $inc_municipal,'<br>',
// $numero,'<br>',
// $estado,'<br>',
// $fax,'<br>'
// ;

?>