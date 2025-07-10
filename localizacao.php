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
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

</head>
 
<body>

<div class="container"> 
 
<h3>Nossa Localização</h3>
<hr class="my-4">

<div class="google-maps">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59406.87193866127!2d-47.04386476838962!3d-21.47128285448623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b7b79542ffd673%3A0x9abe6b8e63307fdf!2sMococa%2C+SP!5e0!3m2!1spt-BR!2sbr!4v1543179311454" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</div>

<?php include "footer.php"?>

</body>

</html>