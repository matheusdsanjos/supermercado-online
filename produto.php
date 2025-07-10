<?php

try {
	include 'conexao.php';
	$stmt = $conexao->prepare('select * from produtos where codigo=?');
	$stmt->bindValue(1, $_REQUEST['codigo']);
	$stmt->execute();
	
	$produto = $stmt->fetchObject();	
}   
	catch(Exception $e) 
{
	echo "Ocorreu o seguinte erro: " . $e->getMessage();
}
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
        
        <div class="col-lg-5">
          <div class="card mt-4">
            <img id="myImg" class="card-img-top" alt="<?php echo $produto->nome ?>" src="<?php echo $produto->imagem ?>">
          </div>
        </div>
        
        <div class="col-lg-5">
          <div class="mt-4">
        	<h3><?php echo $produto->nome ?></h3>
            <p><div class="preco">R$ <?php echo number_format($produto->preco, 2, ',', '.') ?></div></p>
            <div class="form-row">
                <a href="carrinho.php?clicou_botao_comprar=true&codigo=<?php echo $produto->codigo ?>" class="btn btn-block btn-lg btn-success">Adicionar ao Carrinho</a>
		    </div>     
          </div>	  
        </div>
        
</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<?php include "footer.php"?>

<script src="js/jquery.modal.js"></script>

</body>

</html>