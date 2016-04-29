<?php

session_start(); // Inicia a session

include "../PHP/config.php";

$usuario = filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");

$usuario2 = $_POST['usuario'];
$senha2 = $_POST['senha'];

if ((!$usuario) || (!$senha)){

    echo "Por favor, todos campos devem ser preenchidos! <br /><br />";

    ob_clean();
    header('location: singin.html');
//    include "./singin.html";

}else{

    $sql ="SELECT * FROM usuarios WHERE usuario='$usuario2' AND senha='$senha2'";
    
    
    //echo "SELECT * FROM usuarios WHERE usuario='$usuario2' AND senha='$senha2'" ; die;
    
    $result = mysqli_query($link, $sql);
    $login_check = mysql_num_rows($result);

    if ($login_check > 0){

        while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){

            foreach ($row AS $key => $val){

                $key = stripslashes( $val );

            }

            $_SESSION['usuario_id'] = $usuario_id;
            $_SESSION['nome'] = $nome;
            $_SESSION['sobrenome'] = $sobrenome;
            $_SESSION['email'] = $email;
            $_SESSION['nivel_usuario'] = $nivel_usuario;

            mysqli_query($link, "UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='$usuario_id'");

            header("Location: cadastros.php");

        }

    }else{

        echo "Voce nao pode logar-se! Este usuario e/ou senha nao sao validos!<br />
              Por favor tente novamente!<br/>";

        include "singin.html";

    }

}
