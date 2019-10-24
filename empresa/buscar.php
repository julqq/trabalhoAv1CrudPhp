<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Empresas Cadastradas</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Esta área é do cabecalho -->
<header class = "cabecalho">
    <div class = "container">
        <div class="titulo titulo-cabecalho">Sistema de Gerenciamento de Empresas</div>
    </div>
</header>

	<div class="principal">
		<div class="container">
            <div class="titulo-principal">Empresas Cadastradas</div>
            



            
				
            <table border=1 width="100%" cellspacing=0>
                <tr style="background-color: #000;color: #fff">
                    <th>Código</th><th>Nome Fantasia</th><th>Razão Social</th><th>CNPJ</th><th colspan=2>Ação</th>
                </tr>
                <tr>


                <?php
                require('conexao.php');

$sql = "SELECT * FROM empresas";

$resultado = mysqli_query($conexao,$sql);



if(mysqli_num_rows($resultado) > 0){

    while($linha = mysqli_fetch_assoc($resultado)){
        $codigo = $linha['codigo'];
        $nomeFantasia = $linha['nome_fantasia'];
        $razaoSocial = $linha['razao_social'];
        $cnpj = $linha['cnpj'];



        

        echo 
                    "<td>$codigo</td>",
                    "<td>$nomeFantasia</td>",
                    "<td>$razaoSocial</td>",
                    "<td>$cnpj</td>",
                    "<td align='center'><a href='alterar.php?codigo=$codigo'><img src='imagem/alterar.jpg' height='20px'></a></td>",
                    "<td align='center'><a href='excluir.php?codigo=$codigo'><img src='imagem/excluir.jpg' height='20px'></a></td>",
                    "</tr>";
        
        
    };
    


}else{
    echo "Nenhum resultado obtido na pesquisa.";
};
mysqli_close($conexao);

?>
                
            </table>
            
           <a class="botaonovo" href="empresa.html">Cadastro</a>
            
		</div>
            
		</div>
	</div>
    
    	<footer class="rodape">
		<div class="container">
			<div class="titulo titulo-rodape">UNINOVE PHP - &copy Todos os direitos reservados</div>
		</div>
	    </footer>

</body>
</html>