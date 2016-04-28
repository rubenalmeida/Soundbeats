<?php

include "../PHP/config.php";

$nome = $_POST['nome'];

if(isset($nome)){
 $sql = mysqli_query($link,"INSERT INTO artistas (nome) VALUES ('$nome')") or die(mysqli_error($link));

 echo 'Cadastrado com sucesso';
 include "cad_Artistas.html";
}else {
    echo 'Preencha o campo';
    include "cad_Artistas.html";
}