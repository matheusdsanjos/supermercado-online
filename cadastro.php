<!DOCTYPE html>
<html lang="pt">

<head>
    
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Supermercado Online</title>
    
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.mask.js"></script>
    
    <script type="text/javascript">
		  $(function() {
  		  $('#nascimento').mask('00/00/0000');
			  $('#celular').mask('(00) 0 0000-0000');
			  $('#cep').mask('00.000-000');
			  $('#cpf').mask('000.000.000-00', {reverse: true});
		  });
	  </script>
    
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

<h3>Página de Cadastro</h3>
<hr class="my-4">
<form action="cadastro2.php" method="post">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
      </div>
      <div class="form-group col-md-6">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" placeholder="Digite seu sobrenome">
      </div>
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="sexo">Sexo</label>
    <select name="sexo" class="form-control">
    <option value="0">Sexo</option>
    <option value="M">M</option>
    <option value="F">F</option>
    </select>
    </div>
    <div class="form-group col-md-5">
    <label for="nascimento">Data de nascimento</label>
    <input type="text" id="nascimento" name="nascimento" class="form-control" placeholder="Digite sua data de nasc.">
    </div>
    <div class="form-group col-md-5">
      <label for="celular">Celular</label>
      <input type="text" id="celular" name="celular" class="form-control" placeholder="Digite seu celular">
    </div>
  
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-9">
    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço">
    </div>
    <div class="form-group col-md-3">
      <label for="numero_casa">Nº da residência</label>
      <input type="text" name="numero_casa" class="form-control" placeholder="Número">
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-7">
    <label for="bairro">Bairro</label>
    <input type="text" name="bairro" class="form-control" placeholder="Digite seu bairro">
    </div>
    <div class="form-group col-md-5">
      <label for="cep">CEP</label>
      <input type="text" id="cep" name="cep" class="form-control" placeholder="Digite seu CEP">
    </div>

  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Digite seu CPF">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="email">E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
    </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
	  <small id="senha" class="form-text text-muted">*possui mecanismo de criptografia <i class="fas fa-lock"></i></small>
    </div>
  
  </div>

  <button type="submit" class="btn btn-success btn-block" id="submit">Cadastrar</button><p>

</form>

        <div id="sucesso">
        <?php echo isset($_REQUEST["sucesso"]) ? $_REQUEST["sucesso"] : ""?>
        </div>

</div>
</div>
</div>

<?php include "footer.php"?>

</body>

</html>