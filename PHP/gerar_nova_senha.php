<?php

session_start(); // Inicia a session

include "config.php";

$senha = $_POST['senha'];
$email = $_POST['email'];


function recupera_senha($email){

    //if (!isset($email)) {

      //  echo "Você esqueceu de preencher seu email.<br />
//<strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />";

       // include "formulario_senha_perdida.html";

      //  exit();

   // }

        $link = mysqli_connect("localhost", "root", "", "musix");
        $sql_check = mysqli_query($link, "SELECT * FROM usuarios WHERE email='$email'");

        $sql_check_num = mysqli_num_rows($sql_check);

        if ($sql_check_num == 0) {

            echo "Este email não está cadastrado em nosso banco de dados.<br /><br />";

            include "formulario_senha_perdida.html";

            exit();




    }else{
        $senha = $_POST['senha'];
        mysqli_query($link, "UPDATE usuarios SET senha='$senha' WHERE email ='$email'" == true);
        mysqli_close($link);
    }



}

recupera_senha($email);


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type:text/html; charset=UTF-8\n";
$headers = "From: <projetomusix@gmail.com>\n"; //Vai ser //mostrado que o email partiu deste email e seguido do nome
$headers .= "X-Sender: <projetomusix@gmail.com>\n"; //email do servidor //que enviou
$headers .= "X-Mailer: PHP v".phpversion()."\n";
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path: <projetomusix@gmail.com>\n"; //caso a msg //seja respondida vai para este email.
$headers .= "MIME-Version: 1.0\n";
$mensagem = "Prezado usuario,<br />Obrigado pelo seu cadastro em nosso site, <a href='http://www.Musix.com.br'>www.Musix.com.br</a>!<br /> <br />

</a><br /><br />
Obrigado!<br /><br />
Webmaster<br /><br /><br />

Esta é uma mensagem automática, por favor não responda!";

mail($email, $mensagem, $headers);

    echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />
Por favor verifique seu email!<br /><br />";




    include "formulario_cadastro.php";


    ?>