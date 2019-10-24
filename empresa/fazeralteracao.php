<?php
    require('conexao.php');

    

    $codigo  = $_POST['txtcodigo'];
    $tipoEmpresa = $_POST['txttipoempresa'];
    $crt = $_POST['txtcrt'];
    $cnpj  = $_POST['txtcnpj'];
    $inscricaoEstadual = $_POST['txtinscricaoestadual'];
    $incricaoMunicipal = $_POST['txtinscricaomunicipal'];
    $nomeFantasia  = $_POST['txtnomefantasia'];
    $razaoSocial = $_POST['txtrazaosocial'];
    $cep = $_POST['txtcep'];
    $endereco  = $_POST['txtendereco'];
    $numero = $_POST['txtnumero'];
    $complemento = $_POST['txtcomplemento'];
    $bairro  = $_POST['txtbairro'];
    $cidade = $_POST['txtcidade'];
    $estado = $_POST['txtestado'];
    $responsavel  = $_POST['txtresponsavel'];
    $email  = $_POST['txtemail'];
    $telefone  = $_POST['txttelefone'];
    $fax  = $_POST['txtfax'];
    


    $sql = "UPDATE empresas SET
     nome_fantasia='$nomeFantasia',
     cep='$cep',
     complemento='$complemento',
     responsavel='$responsavel',
     tipo_de_empresa='$tipoEmpresa',
     endereco='$endereco',
     crt='$crt',
     bairro='$bairro',
     email='$email',
     cnpj='$cnpj',
     razao_social='$razaoSocial',
     insc_est='$inscricaoEstadual',
     cidade='$cidade',
     telefone='$telefone',
     inc_municipal='$incricaoMunicipal',
     numero='$numero',
     estado='$estado',
     fax='$fax' 
     WHERE codigo = $codigo;";
    

 
mysqli_query($conexao,$sql);
mysqli_close($conexao);

echo "Usuario $nomeFantasia alterado com sucesso!" ;
header("refresh: 2; url=buscar.php");



?>