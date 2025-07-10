<?php
	
	$nome        = $_REQUEST["nome"];
	$sobrenome   = $_REQUEST["sobrenome"];
	$sexo        = $_REQUEST["sexo"];
	$nascimento  = $_REQUEST["nascimento"];
	$celular     = $_REQUEST["celular"];
	$endereco    = $_REQUEST["endereco"];
	$numero_casa = $_REQUEST["numero_casa"];
	$bairro      = $_REQUEST["bairro"];
	$cep         = $_REQUEST["cep"];
	$cpf         = $_REQUEST["cpf"];
	$email       = $_REQUEST["email"];
	$senha       = sha1($_REQUEST["senha"]);

	if (empty ($_REQUEST["nome"]) || empty($_REQUEST["sobrenome"]) || empty($_REQUEST["sexo"]) || empty($_REQUEST["nascimento"]) || empty($_REQUEST["celular"]) || empty($_REQUEST["endereco"]) || empty($_REQUEST["numero_casa"]) || empty($_REQUEST["bairro"]) || empty($_REQUEST["cep"]) || empty($_REQUEST["cpf"]) || empty($_REQUEST["email"]) || empty($_REQUEST["senha"]))
	
	die("<script>
	alert ('Oops! \\nPor favor, preencha corretamente todos os campos.')
	history.go(-1);
	</script>");
	
	$nascimento = explode("/",$nascimento);
	
	$nascimento = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];
	
	$celular = preg_replace('/\D/', '', $celular);
	
	include "conexao.php";
			
	$sql = "insert into clientes values (null, :nome, :sobrenome, :sexo, :nascimento, :celular, :endereco, :numero_casa, :bairro, :cep, :cpf, :email, :senha)";
	
	$result = $conexao->prepare($sql);
	$result->bindValue (":nome", $nome);
	$result->bindValue (":sobrenome", $sobrenome);
	$result->bindValue (":sexo", $sexo);
	$result->bindValue (":nascimento", $nascimento);
	$result->bindValue (":celular", $celular);
	$result->bindValue (":endereco", $endereco);
	$result->bindValue (":numero_casa", $numero_casa);
	$result->bindValue (":bairro", $bairro);
	$result->bindValue (":cep", $cep);
	$result->bindValue (":cpf", $cpf);
	$result->bindValue (":email", $email);
	$result->bindValue (":senha", $senha);
	$result->execute();

	header("location: login.php?sucesso=<div class='alert alert-success' role='alert'><b>Parabéns!</b> Cadastro efetuado com sucesso.</div>");
					
?>