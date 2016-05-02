<html lang="pt-br">
    <head>
        <title>Cadastros</title>
        <meta charset="utf-8">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap/bootstrap.min.css" rel="stylesheet">
    
 
    
    </head>
    <body>
        <?php
        
            include_once 'functionsAdmin.php'; 
            session_checker(); 
        ?>
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="cad_musicas.html">Musicas</a></li>
            <li role="presentation"><a href="cad_Artistas.html">Artistas</a></li>
            <li role="presentation"><a href="cad_Albums.html">Albums</a></li>
        </ul>
        
        <h1>Selecione um dos cadastros acima!</h1>
        
    </body>
</html>
