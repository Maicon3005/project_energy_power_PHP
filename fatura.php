<?php 
	$dados = $_POST["cliente"];
	include 'demonstrativo.html';

	const VALORBASE = 4;
	const VALORRESISDENCIA = 0.8;
	const VALORINDUSTRIA = 0.9;
	const VALORCOMERCIO = 1;

	mostrarDados($dados);

	/*
		echo  "<script>alert('Por favor, digite um CPF válido!');</script>";
		echo "<script>window.location='index.html';</script>";
	*/

	function mostrarDados($dados){
		$tipoCliente = "";
		$codigo = $dados[0];
		$nome = $dados[1];
		$qtdConsumida = $dados[2];
		if($dados[3] == "residencia"){
			$tipoCliente = "Residencial";
		}else if($dados[3] == "industria"){
			$tipoCliente = "Industrial";
		}else{
			$tipoCliente = "Comercial";
		}
		$valorConta = calcularValor($dados[3], $dados[2]);
		echo "<script>document.getElementById('codigo-dem').innerHTML = ".$codigo.";</script>";
		echo "<script>document.getElementById('nome-dem').innerHTML = ".$nome.";</script>";
		echo "<script>document.getElementById('valorconsumido-dem').innerHTML = ".$qtdConsumida.";</script>";
		echo "<script>document.getElementById('cliente-dem').innerHTML = ".$tipoCliente.";</script>";
		echo "<script>document.getElementById('valorconta-dem').innerHTML = ".$valorConta.";</script>";
		echo $codigo." ".$nome." ".$qtdConsumida." ".$tipoCliente." ".$valorConta;
	}

	function calcularValor($tipo, $consumo){
		switch($tipo){
			case "residencia":
				return (VALORBASE * VALORRESISDENCIA) * $consumo;
				break;
			case "industria":
				return (VALORBASE * VALORINDUSTRIA) * $consumo;
				break;
			case "comercio":
				return (VALORBASE * VALORCOMERCIO) * $consumo;
				break;
		}
	}



	/*function validarCampos($dados){
		$codigo = $dados[0];
		$nome = $dados[1];
		$consumo = $dados[2];
		$tipo = $dados[3];
		$flag = true;

		if(str[i].matches("[0-9]+")

		echo $codigo." ".$nome." ".$consumo." ".$tipo;
	}
*/
 ?>