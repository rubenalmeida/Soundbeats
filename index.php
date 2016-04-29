<?php
echo '<pre>';
$conexao = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net", "b812cd591460c2", "86dc0a6e", "soundbeats");

$sql = "select * from usuarios";

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
                    <td><?php echo $curso['usuario_id']; ?></td>
                    <td><?php echo $curso['usuario']; ?></td>
                </tr>
          
            <?php }?>

        </table>
    </body>
</html>

$usuario_id = $_SESSION['usuario_id'] ;
             $nome = $_SESSION['nome'];
             $sobrenome = $_SESSION['sobrenome'];
             $email = $_SESSION['email'];
             $nivel_usuario = $_SESSION['nivel_usuario'];