<?php
session_start(); // Inicia a session

include "config.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ((!$usuario) || (!$senha)){

    echo "Por favor, todos campos devem ser preenchidos! <br /><br />";

    include "telaLogin.html";

}else{

   // $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'");
    $result = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'");

    $login_check = mysql_num_rows($result);

    if ($login_check > 0){

        while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){

            foreach ($row AS $key => $val){

                $$key = stripslashes( $val );

            }

            $_SESSION['usuario_id'] = $usuario_id;
            $_SESSION['nome'] = $nome;
            $_SESSION['sobrenome'] = $sobrenome;
            $_SESSION['email'] = $email;
            $_SESSION['nivel_usuario'] = $nivel_usuario;

            mysqli_query($link, "UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='$usuario_id'");

            echo "Login Concluido!";
            
            //header("Location: area_restrita.php");

        }

    }else{

        echo "Voce nao pode logar-se! Este usuario e/ou senha nao sao validos!<br />
              Por favor tente novamente!<br/>";

        include "./telaLogin.html";

    }

}
