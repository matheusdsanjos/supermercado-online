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
	h1{
		text-align:center;
		
	}
  .container{
		text-align:center;	
	}
	.card-body{
	  height:auto;
	}
	</style>

</head>
 
<body>

<div class="container"> 
 
 <h3>Dúvidas Frequentes</h3>
 Ainda não conseguiu sanar sua dúvida? Temos a solução!<br>Na  na parte inferior direita de sua tela existe um chat em que você consegue conversar diretamente com nossos atendentes!
 <hr class="my-4"> 
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Qual o prazo para solicitar uma troca?
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Você tem até 7 dias corridos após a entrega do produto para solicitar uma troca. <p>

Após o prazo de 7 dias, se o produto apresentar defeito, entre em contato diretamente com o fabricante ou vendedor parceiro.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Como eu faço para trocar meu(s) produto(s)?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       Você pode entrar em contato pelo telefone <b>(19) 9 9352-0771</b> e fazer essa solicitação para um de nossos atendentes. <p>

*Horário de atendimento: de segunda a sábado, das 9h às 21h. Exceto feriados nacionais.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Como comprar no site?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        É bem simples comprar no nosso site. <p>

Se quiser comprar mais de um item, você vai adicionando no carrinho os produtos escolhidos e pode continuar navegando pelo site normalmente. Quando já tiver escolhido tudo, basta clicar no carrinho no topo do site para continuar o processo.<p>

Se quiser comprar apenas um item, pode clicar direto no botão "Comprar", que você dará continuidade ao processo.<p>

Para finalizar, você precisará fazer o login e indicar os dados para entrega e pagamento.
      </div>
    </div>
  </div>
</div>

</div>

</div>

<?php include "footer.php"?>

</body>

</html>