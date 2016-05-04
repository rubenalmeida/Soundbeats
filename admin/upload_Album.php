<?php
include "../php/config.php";

$nome = filter_input(INPUT_POST, "nome");
$ano = filter_input(INPUT_POST, "ano");
$select = filter_input(INPUT_POST, "select");

if(isset($nome, $ano, $select)){
    
$sql = "INSERT INTO albums (nome_album, ano_album, Artistas_id_Artistas) VALUES ('$nome', '$ano', '$select');";
$result = mysqli_query($link, $sql);


    if($result){
    echo 'Salvo com sucesso!.';
    include 'cad_Albums.php';
    }  else {
        echo 'erro sql!.';
        include 'cad_Albums.php';
    }
}  else {
    echo 'Erro ao salvar Album';
    include 'cad_Albums.php';
}