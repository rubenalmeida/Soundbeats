<?php

include 'config.php';

    
    $nome = filter_input(INPUT_POST, "nome");
    $sobrenome = filter_input(INPUT_POST, "sobrenome");
    $email = filter_input(INPUT_POST, "email");
    $usuario = filter_input(INPUT_POST, "usuario");
    $senhat = filter_input(INPUT_POST, "senha");
    
    
    
    /* Checagem de usuario e email*/
    
    $query ="SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'";
    $sql_email_check = mysqli_query($link, $query);
    
    $query2 ="SELECT COUNT(usuario_id) FROM usuarios WHERE usuario='{$usuario}'";
    $sql_usuario_check = mysqli_query($link, $query2);
    
    $eReg = mysqli_fetch_array($sql_email_check);
    $uReg = mysqli_fetch_array($sql_usuario_check);

    $email_check = $eReg[0];
    $usuario_check = $uReg[0];

    if (($email_check > 0) || ($usuario_check > 0)){

        echo "<strong>ERRO</strong>: <br /><br />";

        if ($email_check > 0){

            echo "Este email já está sendo utilizado.<br /><br />";

            unset($email);

        }

        if ($usuario_check > 0){

            echo "Este nome de usuário já está sendo
utilizado.<br /><br />";

            unset($usuario);

        }

        include "formulario_cadastro.php";

    }else{


        $senhaf = $senhat;



// Inserindo os dados no banco de dados

        
         $query3 = "INSERT INTO usuarios (nome, sobrenome, email, usuario, senha, data_cadastro, ativado) VALUES ('$nome', '$sobrenome', '$email', '$usuario', '$senhaf', now(), '0')";
         $result = mysqli_query($link, $query3);
        
         if (!$result){

            echo "Ocorreu um erro ao criar sua conta, entre em contato.";

        }else{
           //$sql = "select usuario_id from usuarios where usuario = '$usuario' ";
            
           $usuario_id = mysqli_insert_id($link);

            // Enviar um email ao usuário para confirmação e ativar o cadastro!

            $headers = "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
            $headers .= "From: Teu Domínio - Webmaster<email@teusite.com.br>";

            $subject = "Confirmação de cadastro - teusite.com.br";
            $mensagem  = "Prezado  {$nome} {$sobrenome},<br />
            Obrigado pelo seu cadastro em nosso site, <a href='http://soundbeats.azurewebsites.net/HTML/index.html'>
            http://soundbeats.azurewebsites.net/HTML/index.html</a>!<br /> <br /> 

            Para confirmar seu cadastro e ativar sua conta em nosso site, podendo acessar à
            áreas exclusivas, por favor clique no link abaixo ou copie e cole na barra de
            endereço do seu navegador.<br /> <br />

            <a href='http://soundbeats.azurewebsites.net/PHP/ativar.php?id={$usuario_id}&code={$senhaf}'>
            http://soundbeats.azurewebsites.net/PHP/ativar.php?id={$usuario_id}&code={$senhaf}
            </a>

            <br /> <br />
            Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo
            efetuado o login com os seguintes dados abaixo:<br > <br /> 

            <strong>Usuario</strong>: {$usuario}<br />
            <strong>Senha</strong>: {$senhaf}<br /> <br />
                
            Obrigado!<br /> <br /> 

            Webmaster<br /> <br /> <br />
            Esta é uma mensagem automática, por favor não responda!";

            mail($email, $subject, $mensagem, $headers);

            echo "Foi enviado para seu email - ( ".$email." ) um pedido de
            confirmação de cadastro, por favor verifique e sigas as instruções!";
        }

    
    }