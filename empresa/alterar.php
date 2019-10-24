<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Empresa</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<!-- Esta área é do cabecalho -->
<header class = "cabecalho">
    <div class = "container">
        <div class="titulo titulo-cabecalho">Sistema de Gerenciamento de Empresas</div>
    </div>
</header>

<?php
$codigo = $_GET['codigo']; 
require('select.php');
?>




<div class="principal">
	<div class="container">
		<div class="titulo-principal">Alterar</div>
			<form name="formulario" method="post" action="fazeralteracao.php">
				<table class="tabela">
					<tr class="titulo-tabela">
						<td>Código</td>
						<td>Tipo Empresa</td>
						<td>CRT</td>
						<td>CNPJ</td>
						<td>Insc. Est.</td>
						<td>Insc. Municipal</td>
					</tr>
                    <tr>
                        <td><input type='text' name='txtcodigo' class='campo' value = <?php echo $codigo?> readonly></td>
                        <td><input type='text' name='txttipoempresa' value = <?php echo $tipo_de_empresa?> class='campo'></td>
                        <td><input type='text' name='txtcrt' value = <?php echo $crt?> class='campo'></td>
                        <td><input type='text' name='txtcnpj' value = <?php echo $cnpj?> class='campo'></td>
                        <td><input type='text' name='txtinscricaoestadual' value = <?php echo $insc_est?> class='campo'></td>
                        <td><input type='text' name='txtinscricaomunicipal' value = <?php echo $inc_municipal?> class='campo'></td>
                    </tr>
					
                    <tr class="titulo-tabela">
                        <td colspan="3">Nome Fantasia</td>
                        <td colspan="3">Razão Social</td>
                    </tr>
                    <tr>
                        <td colspan='3'><input type='text' name='txtnomefantasia' value = <?php echo $nomeFantasia?> class='campo'></td>
                        <td colspan='3'><input type='text' name='txtrazaosocial' value = <?php echo $razao_social?> class='campo'></td>
                    </tr>

                    <tr class="titulo-tabela">
                        <td>CEP</td>
                        <td colspan="4">Endereço</td>
                        <td>Número</td>
                    </tr>
                    <tr>
                        <td><input type='text' name='txtcep' value = <?php echo $cep?> class='campo'></td>
                        <td colspan='4'><input type='text' name='txtendereco' value = <?php echo $endereco?> class='campo'></td>
                        <td><input type='text' name='txtnumero' value = <?php echo $numero?> class='campo'></td>
                    </tr>
                    
                    
                    <tr class="titulo-tabela">
                        <td colspan="2">Complemento</td>
                        <td colspan="2">Bairro</td>
                        <td>Cidade</td>
                        <td>Estado</td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type='text' name='txtcomplemento' value = <?php echo $complemento?> class='campo'></td>
                        <td colspan='2'><input type='text' name='txtbairro' value = <?php echo $bairro?> class='campo'></td>
                        <td><input type='text' name='txtcidade' value = <?php echo $cidade?> class='campo'></td>
                        <td><input type='text' name='txtestado' value = <?php echo $estado?> class='campo'></td>
                    </tr>


                    <tr class="titulo-tabela">
                        <td colspan="2">Responsável</td>
                        <td colspan="2">e-mail</td>
                        <td>Telefone</td>
                        <td>Fax</td>
                    </tr>
                    <tr>
                        <td colspan='2'><input type='text' name='txtresponsavel' value = <?php echo $tipo_de_empresa?> class='campo'></td>
                        <td colspan='2'><input type='text' name='txtemail' value = <?php echo $email?> class='campo'></td>
                        <td><input type='text' name='txttelefone' value = <?php echo $telefone?> class='campo'></td>
                        <td><input type='text' name='txtfax' value = <?php echo $fax?> class='campo'></td>
                    </tr>
				</table>
				<input type="submit" value="Gravar Empresa" class="botao">
			</form>
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