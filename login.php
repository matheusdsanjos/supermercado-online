<?php 
	  
    //session_start();

    //echo  $_SESSION["nome"];
		  		  
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
<div class="container mb">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Entrar</h3>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
	  <hr>
        <form action="login2.php" method="post">
          <div class="form-group">
		  <label for="email">E-mail</label>
          <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
          </div>            
          <div class="form-group">
		  <label for="senha">Senha</label>
          <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
          <br />
          É novo por aqui? <a href="cadastro.php" style="color:#21b354">Cadastre-se</a>
          </div>
          <input type="submit" value="Entrar" class="btn btn-success btn-block">
		</form><p>
        <div id="sucesso">
            <?php echo isset($_REQUEST["sucesso"]) ? $_REQUEST["sucesso"] : ""?>
        </div>
        
        <div id="logout">
            <?php echo isset($_REQUEST["logout"]) ? $_REQUEST["logout"] : ""?>
        </div> 

      </div>
    </div>
	
	</div>

<?php include "footer.php"?>
  
</body>

</html>
