<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Com o Supermercado Online, você faz compras virtualmente no conforto de sua residência, podendo usar seu smartphone ou deskstop. Nosso site foi criado para você que não está muito afim de sair de casa para fazer suas compras.">
    <link rel="canonical" href="http://etecfg.projetosetim.com.br/2018/3etim/grupo4/">
    <meta name="author" content="Matheus dos Anjos, Kevyn Alves, Igor Qeranza, Gustavo Santos e André Collogi">
    
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

<div id="carousel-1" class="carousel slide" data-ride="carousel">

   <ol class="carousel-indicators">
       <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-1" data-slide-to="1"></li>
       <li data-target="#carousel-1" data-slide-to="2"></li>
   </ol>
  
   <div class="carousel-inner">
    
      <div class="carousel-item active">
         <a href="acougue.php">
         <img class="d-block w-100" src="imagens/acougue.jpg" alt="First slide">
         </a>
         <div class="carousel-caption d-none d-md-block">
           <h1>Açougue</h1>
           <p>Carnes Bovinas, Suínas e Aves</p>
         </div>
      </div>
    
      <div class="carousel-item">
         <a href="hortifruti.php">
         <img class="d-block w-100" src="imagens/frutas.jpg" alt="Second slide">
         </a>
         <div class="carousel-caption d-none d-md-block">
           <h1>Hortifruti</h1>
           <p>Frutas, Legumes e Verduras</p>
         </div>
      </div>
    
      <div class="carousel-item">
          <a href="laticinios.php">
          <img class="d-block w-100" src="imagens/laticinios.jpg" alt="Third slide">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h1>Frios e Laticínios</h1>
            <p>Queijos, Iogurtes e Derivados</p>
          </div>
      </div>
    
   </div>
   
   <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
   </a>
   
   <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
   </a>

</div>

<div id="carousel-2" class="carousel slide carousel-fade mt-3 mb-3" data-ride="carousel">
   
   <ol class="carousel-indicators">
       <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-2" data-slide-to="1"></li>
   </ol>
  
   <div class="carousel-inner">
      
      <div class="carousel-item active">
         <a href="bebidas.php">
         <img class="d-block w-100" src="imagens/bebidas.jpg" alt="First slide">
         </a>
      </div>
      
      <div class="carousel-item">
         <a href="limpeza.php">
         <img class="d-block w-100" src="imagens/limpeza.jpg" alt="Second slide">
         </a>
      </div>
   </div>
   
   <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
   </a>
   
   <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
   </a>

</div>

<?php include "footer.php"?>

</body>
  
</html>