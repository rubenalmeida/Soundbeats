<?php

include "config.php";
 
//recupera os dados enviados atraves do formulário
//NOME TEMPORÁRIO
$file_tmp = $_FILES["file"]["tmp_name"];
 //NOME DO ARQUIVO NO COMPUTADOR
$file_name = $_FILES["file"]["name"];
//TAMANHO DO ARQUIVO
$file_size = $_FILES["file"]["size"];
//MIME DO ARQUIVO
$file_type = $_FILES["file"]["type"];
 
//antes de ler o conteudo do arquivo você pode fazer upload para compactar em .ZIP ou .RAR, no caso de imagem você poderá redimensionar o tamanho antes de gravar no banco. Claro que depende da sua necessidade.
 
//Para fazer UPLOAD poderá usar COPY ou MOVE_UPLOADED_FILE
//copy($file_tmp, "caminho/pasta/$file_name");
//move_uploaded_file($file_tmp,"caminho/pasta/$file_name");
 
//lemos o  conteudo do arquivo usando afunção do PHP  file_get_contents
$soundbeats = file_get_contents($file_tmp);
// evitamos erro de sintaxe do MySQL
$soundbeats2 = mysql_real_escape_string($soundbeats);
 
//montamos o SQL para envio dos dados
$sql = "INSERT INTO `soundbeats`.`musicas` (`Codigo` ,`NmArquivo` ,`Descricao` , `Arquivo` ,`Tipo` ,`Tamanho` ,`DtHrEnvio`)
VALUES ('NULL', 'foto.jpg', '$file_name', '$soundbeats', '$file_type', '$file_size', CURRENT_TIMESTAMP)";
//executamos a instução SQL
mysqli_query($link, $sql) or die (mysqli_connect_error());
