<?php
    require(conexao.php);

    // ik8IFv9ijF
    // pbP4tV4dlW

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
    

    // INSERT INTO `empresas`(`codigo`, `nome_fantasia`, `cep`, `complemento`, `responsavel`, `tipo_de_empresa`, `endereco`, `crt`, `bairro`, `email`, `cnpj`, `razao_social`, `insc_est`, `cidade`, `telefone`, `inc_municipal`, `numero`, `estado`, `fax`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19])



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
    fax) VALUES('$nomeFantasia','$cep','$complemento','$responsavel','$tipoEmpresa','$endereco','$crt','$bairro','$email','$cnpj','$razaoSocial','$inscricaoEstadual','$cidade','$telefone','$incricaoMunicipal','$numero','$estado','$fax');";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

echo "Usuario $nomeFantasia Cadastrado com sucesso!" ;
header("refresh: 2; url=empresa.html");



?>