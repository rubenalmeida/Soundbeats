<?php
echo '<pre>';
$conexao = mysqli_connect('localhost', 'root', 'iesb', 'escola');

$sql = "select * from curso";

$resultado = mysqli_query($conexao, $sql);

$registros = array();

while ($dados = mysqli_fetch_assoc($resultado)){
    $registros[] = $dados;
}
print_r($registros);

?>

<html>
    <head>
        <title>aula</title>
    </head>
    <body>
       
        <table width="100%" border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
            </tr>
            <?PHP foreach ($registros as $curso){?>
                <tr>
                    <td><?php echo $curso['id_curso']; ?></td>
                    <td><?php echo $curso['nome']; ?></td>
                </tr>
          
            <?php }?>

        </table>
    </body>
</html>

