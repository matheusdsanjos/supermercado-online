<div id="menu-superior">

  <a style="color:#FFF" href="localizacao.php">Nossa Localização</a>
  <a style="color:#FFF" href="duvidas.php">Dúvidas Frequentes</a>
</div>

<div id="linha">
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">

  <a class="navbar-brand" href="index.php">
    <img src="imagens/logo.png" alt="Logo" style="width:110px;">
  </a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    
    <div class="collapse navbar-collapse" id="navbar">
      
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
            Categorias
          </a>
           <div class="dropdown-menu my-2">
             <a class="dropdown-item" href="acougue.php">Açougue</a>
             <a class="dropdown-item" href="bebidas.php">Bebidas</a>
             <a class="dropdown-item" href="confeitaria.php">Confeitaria</a>
             <a class="dropdown-item" href="hortifruti.php">Hortifruti</a>
             <a class="dropdown-item" href="laticinios.php">Frios e Laticínios</a>
             <a class="dropdown-item" href="limpeza.php">Limpeza</a>
             <a class="dropdown-item" href="pet.php">Pet</a>
           </div>
        </li>
      </ul>
    
    <ul class="nav justify-content-center ml-auto">
      <form class="form-inline" name="buscar" method="post" action="busca.php">
          <input class="form-control mr-sm-2" size="75px" type="text" name="buscar" placeholder="O que você procura?">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </ul>
    
    <ul class="nav navbar-nav ml-auto"> 
       <li class="nav-item">
         <a href="conta.php" class="nav-link">Minha conta</a>
       </li>ㅤ
       <li class="nav-item">
         <a href="carrinho.php" class="nav-link">Carrinho</a>
       </li>
    </ul>
	
	</div>

</nav>