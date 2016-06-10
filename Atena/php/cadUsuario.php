<!DOCTYPE html>
<html lang="pt-br">
	
<head>
	<meta charset="utf-8">
</head>

<body>
<?php
	echo "<h1>Os dados informados são:<h1>";
	$nome = $_POST["txtNome"];
	$snome = $_POST["txtSnome"];
	$email = $_POST["txtEmail"];
	$dataNasc = $_POST["txtData"];
	$autorFavorito = $_POST["txtAutor"];

	if(isset($_POST["checkAdm"]))
	$admin = true;
	else
	$admin = false;
	if(isset($_POST["checkDireito"]))
	$direito = true;
	else
	$direito = false;
	if(isset($_POST["checkLitEstrang"]))
	$litEstrang = true;
	else
	$litEstrang = false;
	if(isset($_POST["checkLitNac"]))
	$litNac = true;
	else
	$litNac = false;
	if(isset($_POST["checkAutoAjuda"]))
	$autoAjuda = true;
	else
	$autoAjuda = false;
	if(isset($_POST["checkRomance"]))
	$romance = true;
	else
	$romance = false;
	if(isset($_POST["checkInformatica"]))
	$informatica = true;
	else
	$informatica = false;
	if(isset($_POST["checkMedicina"]))
	$medicina = true;
	else
	$medicina = false;
	if(isset($_POST["checkReligiao"]))
	$religiao = true;
	else
	$religiao = false;
	$senha1 = $_POST["txtSenha1"];
	$senha2 = $_POST["txtSenha2"];

	$camposOK = true;

	if($nome == ""){
	echo "Nome incorreto <br>";
	$camposOK = false;
	}
	if($snome == ""){
	echo "Sobrenome incorreto<br>";
	$camposOK = false;
	}
	if($senha1 != $senha2){
	echo "Senha não correspondente";
	$camposOK = false;
	}

	//data
 	$dia = substr($dataNasc,0,2);
	$mes = substr($dataNasc,3,2);
	$ano = substr($dataNasc,6,4);
	if($dataNasc == ""){
				$verificaData = false;
			}
			if(($mes < 1) || ($mes > 12)){
				$verificaData = false;
			}else if(($dia < 1) || ($dia > 31)){
				$verificaData = false;
			}else if(($mes == 4) || ($mes == 6) || ($mes == 9) || ($mes == 11) && ($dia == 31)){
				$verificaData = false;
			}else if($mes == 2){	
				$isleap = (($ano % 4 == 0) && ($ano % 100 != 0) || ($ano % 400 == 0));
			if(($dia > 29) || ($dia == 29) && ($isleap == false)){
				$verificaData = false;
			}
		 	}	
			if($verificaData == false){
				echo "<b>Data Inválida</b>";
				$camposOK= false;
			}
		if($admin)
			echo"Administração <br>";
		if($direito)
			echo"Direito <br>";
		if($litEstrang)
			echo"Literatura Estrangeira<br>";
		if($litNac)
			echo"Literatura Nacional <br>";
		if($autoAjuda)
			echo"Auto-Ajuda <br>";
		if($romance)
			echo"Romance <br>";
		if($informatica)
			echo"Informática <br>";
		if($medicina)
			echo"Medicina e Saúde<br>";
		if($religiao)
			echo"Religião <br>";
			echo"</b></td></tr></table>";


		
	if($camposOK){
	echo "<table border='0' cellpadding='5'>";
	echo "<tr><td>NOME:</td><td><b>$nome</b></td></tr>";
	echo "<tr><td>SOBRENOME:</td><td><b>$snome</b></td></tr>";
	echo "<tr><td>EMAIL:</td><td><b>$email</b></td></tr>";
	echo "<tr><td>DATA DE NASCIMENTO:</td><td><b>$dataNasc</b></td></tr>";
	echo "<tr><td>AUTOR FAVORITO:</td><td><b>$autorFavorito</b></td></tr>";
	echo "<tr><td>SENHA:</td><td><b>$senha1</b></td></tr>";
	echo "<tr><td>Gêneros Literários:</td><td><b>";
	if($admin)
		echo"Administração <br>";
	if($direito)
		echo"Direito <br>";
	if($litEstrang)
		echo"Literatura Estrangeira<br>";
	if($litNac)
		echo"Literatura Nacional <br>";
	if($autoAjuda)
		echo"Auto-Ajuda <br>";
	if($romance)
		echo"Romance <br>";
	if($informatica)
		echo"Informática <br>";
	if($medicina)
		echo"Medicina e Saúde<br>";
	if($religiao)
		echo"Religião <br>";
		echo"</b></td></tr></table>";
	
}                                             





