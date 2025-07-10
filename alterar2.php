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

<form id="form1" name="form1" method="post" action="alterar2a.php">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço" value="<?php echo $linha["endereco"]?>">
      </div>
      <div class="form-group col-md-6">
        <label for="numero_casa">Nº da Residência</label>
        <input type="text" name="numero_casa" class="form-control" placeholder="Número" value="<?php echo $linha["numero_casa"]?>">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" class="form-control" placeholder="Digite sua barro" value="<?php echo $linha["bairro"]?>">
      </div>
      <div class="form-group col-md-6">
        <label for="cep">CEP</label>
        <input type="text" name="cep" class="form-control" placeholder="Digite seu CEP" value="<?php echo $linha["cep"]?>">
      </div>
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