<?php

include "config.php";

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);
$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$senhat = trim($_POST['senha']);

/* Vamos checar algum erro nos campos */

if ((!$nome) || (!$sobrenome) || (!$email) || (!$usuario) || (!$senhat)){

    echo "ERRO: <br /><br />";

    if (!$nome){

        echo "Nome é requerido.<br />";

    }

    if (!$sobrenome){

        echo "Sobrenome é requerido.<br /> <br />";

    }

    if (!$email){

        echo "Email é um campo requerido.<br /><br />";

    }

    if (!$usuario){

        echo "Nome de Usuário é requerido.<br /><br />";

    }

    if(!$senhat) {
        echo "A senha é requerida.<br /><br />";
    }

    echo "Preencha os campos abaixo: <br /><br />";

    include "formulario_cadastro.php";

}else{

    /* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */

    $sql_email_check = mysqli_query($link,

        "SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'"

    );

    $sql_usuario_check = mysqli_query($link,

        "SELECT COUNT(usuario_id) FROM usuarios WHERE usuario='{$usuario}'"

    );

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


        $sql = mysqli_query($link, "INSERT INTO usuarios (nome, sobrenome, email, usuario, senha, data_cadastro, ativado) VALUES ('$nome', '$sobrenome', '$email', '$usuario', '$senhaf', now(), '1')")

        or die( mysqli_error($link)

        );

        if (!$sql){

            echo "Ocorreu um erro ao criar sua conta, entre em contato.";

        }else{

            echo "Voce foi cadastrado <br> Foi enviado para seu email - ( ".$email." ) um pedido de
confirmação de cadastro, por favor verifique e sigas as instruções!";

        }

    }

}

?>