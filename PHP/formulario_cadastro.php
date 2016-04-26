<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Cadastro-Usuario</title>
</head>

<body>

<form name="cadastro" method="post" action="cadastrar.php">

    <label for="nome">Nome:</label>
    <input name="nome" type="text" id="nome"/><br />

    <label for="sobrenome">Sobrenome:</label>
    <input name="sobrenome" type="text" id="sobrenome" /><br />

    <label for="email"> Email:</label>
    <input name="email" type="text" id="email"  /><br />

    <label for="usuario">Nome de Usuário:</label>
    <input name="usuario" type="text" id="usuario" /><br />

    <label for="senha">Senha:</label>
    <input name="senha" type="password" id="senha"  /><br />

    <input type="submit" name="Submit" value="Enviar" /> <br />

</form>

</body>
</html>