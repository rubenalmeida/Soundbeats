<?php

include "../PHP/config.php";

$nome = filter_input(INPUT_POST, "nome");
$info = filter_input(INPUT_POST, "info");
 

if(isset($nome)){
 $sql = mysqli_query($link, "INSERT INTO artistas (nome , info) VALUES ('$nome', '$info')") or die(mysqli_error($link));

 echo 'Cadastrado com sucesso';
 include "cad_Artistas.php";
}else {
    echo 'Preencha o campo';
    include "cad_Artistas.php";
}