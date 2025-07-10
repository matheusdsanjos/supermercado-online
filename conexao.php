<?php

    $servidor   = "localhost";
	$bancodados = "tcc";
	$datasource = "mysql:host=$servidor;dbname=$bancodados;";
	$usuario    = "root";
	
	try{		
		$conexao = new PDO($datasource, $usuario, "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	    catch (PDOexception $erro)
	{
	    echo 'Erro de Conexão ' . $erro->getMessage();
	}

?>