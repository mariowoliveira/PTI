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
	


		
	if($camposOK){
	echo "<table border='0' cellpadding='5'>";
	echo "<tr><td>NOME:</td><td><b>$nome</b></td></tr>";
	echo "<tr><td>SOBRENOME:</td><td><b>$snome</b></td></tr>";
	echo "<tr><td>EMAIL:</td><td><b>$email</b></td></tr>";
	echo "<tr><td>DATA DE NASCIMENTO:</td><td><b>$dataNasc</b></td></tr>";
	echo "<tr><td>SENHA:</td><td><b>$senha</b></td></tr>";

	
}                                             





