<?php

try {
	
	include 'conexao.php';
	$stmt = $conexao->prepare('select * from produtos where codcategoria=3');
	$stmt->execute();
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
<h3>Chocolates, Doces e Sobremesas</h3>
<hr class="my-4">

<div class="row">
	    
<?php while($produtos = $stmt->fetchObject()): ?>
        
 <div class="col-md-3 mb-4 ml-auto mr-auto">
      <div class="card h-100" id="borda">
        <div class="card-header">
           <a href="produto.php?codigo=<?php echo $produtos->codigo ?>"><img class="card-img-top" src="<?php echo $produtos->imagem ?>"></a>
        </div>
        <div class="card-body">
           <h6 class="card-title"><?php echo $produtos->nome ?></h6>
           <p class="card-text">R$ <?php echo number_format($produtos->preco, 2, ',', '.') ?></p>        
        </div>
        <div class="card-footer">
        <a href="carrinho.php?clicou_botao_comprar=true&codigo=<?php echo $produtos->codigo ?>" class="btn btn-block btn-success btn-sm">Adicionar ao carrinho</a>
        </div>     
        </div>
    </div>

<?php endwhile ?>

</div>

</div>

<?php include "footer.php"?>

</body>

</html>