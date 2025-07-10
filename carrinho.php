<?php

session_start();

// quando rodar pela primeira vez
if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array(); // array = lista de produtos no carrinho.
}

// soma de produtos
$soma_dos_precos = 0.0;

// clicou em limpar carrinho
if(isset($_REQUEST['clicou_limpar_carrinho'])) {
    unset($_SESSION['carrinho']);
}


// soma de produtos
$soma_dos_precos = 0.0;


if(isset($_REQUEST['clicou_botao_comprar'])) {

    try {
	
        include_once 'conexao.php';
        $stmt = $conexao->prepare('select * from produtos where codigo=?');
        $stmt->bindParam(1, $_REQUEST['codigo']);
        $stmt->execute();

        $dados_produto = $stmt->fetchObject();

    } catch(Exception $e) {
        echo "Ocorreu o seguinte erro: " . $e->getMessage();
    }

    $produto_para_carrinho = array( 'imagem' => $dados_produto->imagem,
                                    'nome' => $dados_produto->nome,
                                    'quantidade' => 1,
                                    'preco' => $dados_produto->preco);

    // add produto no carrinho
    array_push($_SESSION['carrinho'], $produto_para_carrinho);
    
    echo "<script>
    alert ('Parabéns! \\nProduto adicionado ao carrinho com sucesso!')
    history.go(-1);
    </script>";
}

// conta quantidade de itens no carrinho.
// testando se existe a sessão com operador ternário.
$total_itens_no_carrinho = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;



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

    <style>

    #produto{  
        width: 75px; 
    }

    </style>

</head>

<body>

<div class="container">
<h3>Carrinho</h3>

<table class="table table-sm mt-3">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  
     for($i=0; $i<$total_itens_no_carrinho; $i++): 

	 $soma_dos_precos = $soma_dos_precos + $_SESSION['carrinho'][$i]['preco'];
  
  ?>
  
  <tr>
      <td><img class="card-img-top" id="produto" src="<?= $_SESSION['carrinho'][$i]['imagem'] ?>"></td>
      <td><?= $_SESSION['carrinho'][$i]['nome'] ?></td>
      <td><?= $_SESSION['carrinho'][$i]['quantidade'] ?></td>
      <td>R$ <?= number_format($_SESSION['carrinho'][$i]['preco'], 2, ',', '.') ?></td>
      <td><a href="" class="btn btn-light btn-sm"><i class="fas fa-trash-alt"></i></a></td>
  </tr>
  
  <?php endfor ?>
        
  </tbody>
</table>

<p>
<table class="table table-sm mt-3 text-center">
  <thead>
    <tr>
      <th scope="col"><h4>Total</h4></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td class="total" style="font-size:20px;">R$ <?php echo number_format($soma_dos_precos, 2, ',', '.'); ?></td>
    </tr>    
  </tbody>
</table>
<hr>

<a href="carrinho.php?clicou_limpar_carrinho=true" class="btn btn-light btn-sm mb-3">Limpar carrinho</a>
<a href="" class="btn btn-light btn-sm mb-3">Atualizar carrinho</a>

<button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Finalizar Compra</button> 

</div>

<?php include "footer.php"?>

</body>
  
</html>