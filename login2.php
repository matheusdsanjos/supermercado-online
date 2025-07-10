<?php 
   include "conexao.php";
   
   $email = $_REQUEST["email"];
   $senha = sha1($_REQUEST["senha"]);
   
   $sql = "select * from clientes where email= :email and senha= :senha";
   
   $result = $conexao->prepare($sql);
   $result->bindValue(":email", $email);
   $result->bindValue(":senha", $senha);
   $result->execute();

   $qtde = $result->rowCount();
   
   if ($qtde > 0)
   {
	   session_start();
	  
	   $linha = $result->fetch(PDO::FETCH_ASSOC);
	   $_SESSION["codigo"] = $linha["codigo"];
	   $_SESSION["nome"] = $linha["nome"];
	   
	   header("location: conta.php");
   }
   
   else
   {
	   echo "<script>
            alert ('Oops! \\nE-mail ou senha inválidos, tente novamente.')
            history.go(-1);
            </script>";
      exit;
   }
?>