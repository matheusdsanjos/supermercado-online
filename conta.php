<?php
try {
    session_start();
    
    if(!isset($_SESSION["codigo"])) {
        header('location: login.php');
    }

   // echo $_SESSION["codigo"];

	include "conexao.php";
	
	$sql= "select * from clientes where codigo = :cod";
	$result= $conexao->prepare($sql);
	$result->bindValue(":cod", $_SESSION["codigo"]);
											
	$result->execute();

  $dados_cliente = $result->fetch(PDO::FETCH_ASSOC);

} catch(Exception $e) {
	echo $e->getMessage();
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

<h3>Minha Conta</h3>

Olá <b><?php echo $dados_cliente['nome']; ?></b>, seja bem-vindo!

<br />

<a href="logout.php" style="color:#21b354">Logout</a>

<hr class="my-4">

<h5>Dados pessoais e de contato:</h5><p>

<a href="alterar1.php?codigo=<?php echo $dados_cliente ["codigo"]?>" style="color:#21b354">Alterar dados</a>

  <table class="table table-sm">
    <thead>
      <tr>
        <th>Nome completo</th>
        <th>Data de nascimento</th>
        <th>CPF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <td><?php echo $dados_cliente ["nome"]?> <?php echo $dados_cliente ["sobrenome"]?></td>
    <td><?php echo $dados_cliente ["nascimento"]?></td>
		<td><?php echo $dados_cliente ["cpf"]?></td>
      </tr>
    </tbody>
  </table>

    <table class="table table-sm">
    <thead>
      <tr>
		<th>E-mail</th>
		<th>Celular</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		<td><?php echo $dados_cliente ["email"]?></td>
		<td><?php echo $dados_cliente ["celular"]?></td>
      </tr>
    </tbody>
  </table>
 
<h5>Dados para entrega e de cobrança:</h5><p>

<a href="alterar2.php?codigo=<?php echo $dados_cliente ["codigo"]?> " style="color:#21b354">Alterar dados</a>
 
    <table class="table table-sm">
    <thead>
      <tr>
        <th>Endereço</th>
        <th>Nº da residência</th>
        <th>Bairro</th>
		    <th>CEP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $dados_cliente ["endereco"]?></td>
        <td><?php echo $dados_cliente ["numero_casa"]?></td>
        <td><?php echo $dados_cliente ["bairro"]?></td>
		    <td><?php echo $dados_cliente ["cep"]?></td>
      </tr>
    </tbody>
  </table>

</div>

<?php include "footer.php"?>

</body>

</html>