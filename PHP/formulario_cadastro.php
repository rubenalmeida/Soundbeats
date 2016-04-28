<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cadastrar</title>

    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap/bootstrap.min.css" rel="stylesheet">

   

    <!-- Custom styles for this template -->
    <link href="../CSS/signin.css" rel="stylesheet">
    <link href="../CSS/cadastro.css" rel="stylesheet">

 

  </head>

  <body>

    <div class="container">
        
        
            
        
        <form class="form-signin" name="cadastro" method="post" action="cadastrar.php">

            <h2 class="form-signin-heading">Cadastre-se</h2>
            
            <label for="nome">Nome:</label>
            <input name="nome" type="text" id="nome" class="form-control" placeholder="Seu primeiro nome" required/><br />

            <label for="sobrenome">Sobrenome:</label>
            <input name="sobrenome" type="text" id="sobrenome" class="form-control" placeholder="Seu sobrenome" required/><br />

            <label for="email"> Email:</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required autofocus /><br />

            <label for="usuario">Nome de Usuário:</label>
            <input name="usuario" type="text" id="usuario" class="form-control" placeholder="Escolha um nome de usuário" required/><br />

            <label for="senha">Senha:</label>
            <input name="senha" type="password" id="senha" class="form-control" placeholder="Senha" required /><br />

           <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>

        </form>
   
       
    </div> <!-- /container -->


  </body>
</html>
