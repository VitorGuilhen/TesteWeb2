<!DOCTYPE html>
<html>
<head>
	<title>Informações</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<form action="form.php" method="POST">
		<fieldset>
			<h2 class="titulo"> FORMULÁRIO </h2>
		Nome:
		<input type="text" name="nome" size="42" maxlength="50"> <br> <br>
		Genero:
		<input type="radio" value="Masculino" name="genero">Masculino
		<input type="radio" value="Feminino" name="genero">Feminino
		<input type="radio" value="Outro" name="genero">Outro <br> <br>
		Ano de Nascimento:
		<input type="text" name="anoNascimento" size="29" maxlength="4" id="ano" > <br> <br>
		<input type="submit" onclick="alert('Enviado com sucesso');" name="Enviar" class="botao">
		<input type="reset" onclick="alert('Dados apagados');" value="Apagar" name="Apagar" class="botao">
		<fieldset class="redpag" style="width: 92%; background-color: #DCDCDC;">
			<a href="form.php" onclick="alert('Restaurar página');">                              Redefinir pagina                              </a>
		</fieldset>
		</fieldset>
		<br> <br> <br>
	</form>
	<fieldset>
	<?php 
		if(!empty($_POST)){
			$nome = $_POST['nome'];
			echo "Nome: " . "$nome" . "<br>";
			echo "Genero: ";
			if (isset($_POST['genero'])) {
				$genero = $_POST['genero'];
			echo "$genero" . "<br>";			
			}
			$anoNascimento = $_POST['anoNascimento'];
			echo "Ano de nascimento: " . "$anoNascimento" . "<br>";
		}
	 ?>
	</fieldset>
</body>
</html>