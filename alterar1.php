<?php
	include "conexao.php";
	
	$codigo = ( $_REQUEST["codigo"]);
	
	$sql = "select * from clientes
			where codigo =:codigo";
	
	$result = $conexao->prepare($sql);
	$result->BindValue(":codigo", $codigo);
	$result->execute();
	
	if($linha = $result->fetch(PDO::FETCH_ASSOC))
	{
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Supermercado Online</title>
    
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
 	<script src="js/jquery.mask.js"></script>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="fontawesome/css/brands.css" rel="stylesheet" type="text/css">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
	
	  <link rel="shortcut icon" href="imagens/favicon.ico" />
    
	  <?php include "navbar.php"?>

</head>

<body>

<div class="container">
<div class="row">
<div class="col-sm-6">

<h3>Alterar dados</h3>
<hr class="my-4">

<form id="form1" name="form1" method="post" action="alterar1a.php">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" value="<?php echo $linha["nome"]?>">
      </div>
      <div class="form-group col-md-6">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome" value="<?php echo $linha["sobrenome"]?>">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nascimento">Data de nascimento</label>
        <input type="text" name="nascimento" class="form-control" placeholder="Digite sua data de nasc." value="<?php echo $linha["nascimento"]?>">
      </div>
      <div class="form-group col-md-6">
        <label for="celular">Celular</label>
        <input type="text" name="celular" class="form-control" placeholder="Digite seu celular" value="<?php echo $linha["celular"]?>">
      </div>
    </div>

    <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="Digite seu CPF" value="<?php echo $linha["email"]?>">
    </div>

  
    <button type="submit" class="btn btn-success btn-block" id="submit">Salvar</button>
  
</form>


<?php

}

?>


</div>
</div>
</div>

<?php include "footer.php"?>

</body>

</html>