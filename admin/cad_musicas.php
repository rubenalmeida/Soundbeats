<html>
    <head>
        <title>cadastros</title>
        <meta charset="utf-8">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">



    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    </head>
    <body>
        <?php
        include "functionsAdmin.php"; 
            //session_checker(); 
        ?>

        <ul class="nav nav-tabs">
            <li role="presentation"><a href="cad_musicas.php">Musicas</a></li>
            <li role="presentation"><a href="cad_Artistas.php">Artistas</a></li>
            <li role="presentation"><a href="cad_Albums.php">Albums</a></li>
        </ul>
        
        <div class="panel panel-primary">
            <div class="panel-heading">Arquivos</div>
            <form id="upload" action="upload_Musicas.php" enctype="multipart/form-data" method="post">
                
                <label for="file">Selecione o arquivo:</label>
                <input  id="file" name="file" type="file" />
                
                <input id="enviar" name = "enviar" type="submit" value="Enviar arquivooo" />
                
            </form>
        </div>
            
        
    </body>
</html>
