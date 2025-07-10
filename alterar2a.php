<?php
	include "conexao.php";
	
	$endereco= $_REQUEST["endereco"];
	$numero_casa= $_REQUEST["numero_casa"];
	$bairro= $_REQUEST["bairro"];
	$cep= $_REQUEST["cep"];
	
	try
	{
			$sql= "update clientes
				set endereco=:endereco,
				numero_casa=:numero_casa,
				bairro=:bairro,
				cep=:cep";
			
		$result= $conexao->prepare($sql);
		$result->bindValue(":endereco", $endereco);
		$result->bindValue(":numero_casa", $numero_casa);
		$result->bindValue(":bairro", $bairro);
		$result->bindValue(":cep", $cep);
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