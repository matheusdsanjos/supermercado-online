<?php

    $servidor   = "mysql.hostinger.com.br";
	$bancodados = "u557720587_18m4";
	$datasource = "mysql:host=$servidor;dbname=$bancodados;";
	$usuario    = "u557720587_18m4";
	
	try{		
		$conexao = new PDO($datasource, $usuario, "BBhahwei1Sm7", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	    catch (PDOexception $erro)
	{
	    echo 'Erro de Conexão ' . $erro->getMessage();
	}

?>