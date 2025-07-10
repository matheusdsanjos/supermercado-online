<?php
	include "conexao.php";
	
	$nome= $_REQUEST["nome"];
	$sobrenome= $_REQUEST["sobrenome"];
	$nascimento= $_REQUEST["nascimento"];
	$email= $_REQUEST["email"];
    $celular= $_REQUEST["celular"];
	
	try
	{
			$sql= "update clientes
				set nome=:nome,
				sobrenome=:sobrenome,
				nascimento=:nascimento,
				email=:email,
				celular=:celular";
			
		$result= $conexao->prepare($sql);
		$result->bindValue(":nome", $nome);
		$result->bindValue(":sobrenome", $sobrenome);
		$result->bindValue(":nascimento", $nascimento);
		$result->bindValue(":email", $email);
        $result->bindValue(":celular", $celular);
		$result->execute();
	
    echo "<script>
    alert ('Parabéns! \\nDados alterados com sucesso!')
    history.go(-2);
    </script>";
	}
	catch (PDOException $erro)
	{
	echo  "<script>
    alert ('Oops! \\nOcorreu algum problema, tente novamente.')
    history.go(1);
    </script>";
	}		
?>