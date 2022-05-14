<!DOCTYPE html>
<html lang="pt-br">
	<head>
		
        <title> Calculo de Média </title>
        	<!--importando o Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
	
	<body>
        	<!--título centralizado-->
        	<h3 align="center">Calculo de Média</h3>
            
        	<!--formulário centralizado-->
		<div class="formulario" align="center">
		    <form action="Aluno.php" method="get">
                	<!--cria os campos de nota-->
                    <label name="v1">Nome</label>
                	<input type="text" name="nome">
                	<br>
                	<label name="v1">Nota 1</label>
                	<input type="text" name="v1">
                	<br>
                	<label name="v2">Nota 2</label>
                	<input type="text" name="v2">
                	<br>
                	<label name="v3">Nota 3</label>
                	<input type="texte" name="v3">
                	<!--criação dos botões com os estilos do Bootstrap-->
                	<p> <input type="submit" value="Calcular" class="btn btn-success"> <input type="reset" 
                    value="Limpar" class="btn btn-danger">		  
		    </form>
		</div>	
	</body>
</html>
<html>
	<head>
		<meta charset="UTF-8">
        	<title> Atividade 1 </title>
        	<!--importando o Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    
	<body>
        	<?php
            		//declaração de variáveis
            $valor0 = $_GET['nome'];
			$valor1 = $_GET['v1'];
			$valor2 = $_GET['v2'];
            $valor3 = $_GET['v3'];
            		//soma os valores e divide por 3
			$media = ($valor1 + $valor2 + $valor3)/3;			
            		//mensagem da média
			$msg = "A sua média das notas do $valor0, $valor1 , $valor2  e  $valor3 é  $media. ";
        	?>
        	<!--estilo de mensagem do Bootstrap-->
		<div class="alert alert-success" role="alert">
			<?=$msg?>
		</div>	
	</body>
</html>