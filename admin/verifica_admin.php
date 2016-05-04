<?php
session_start(); // Inicia a session

include "../php/config.php";

$usuario = filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");


    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($link, $sql);

    $login_check = mysqli_num_rows($result);

    if ($login_check > 0){

        $registros = array();
        while ($row = mysqli_fetch_assoc($result)){
            
            $registros[] = $row;
        }
       
        
         foreach ($registros as $usuario){
            
              $usuario_id = $usuario['usuario_id'] ;
              $_SESSION['usuario_id'] = $usuario_id; 
              
              $nome = $usuario['nome'] ;
              $_SESSION['nome'] = $nome  ; 
            
              $sobrenome = $usuario['sobrenome'] ;
              $_SESSION['sobrenome'] = $sobrenome; 
            
              $nivel_usuario = $usuario['nivel_usuario'] ;
              $_SESSION['nivel_usuario'] = $nivel_usuario; 

            mysqli_query($link, "UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='$usuario_id'");
           
            header('Location: cadastros.php');
    
          }
    }else{

        echo "Voce nao pode logar-se! Este usuario e/ou senha nao sao validos!<br />
              Ou voce nao ativou sua conta.
              Por favor tente novamente!<br/>";

        include "login.html";

    }

