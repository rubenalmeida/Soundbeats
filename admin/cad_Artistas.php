<html>
    <head>
        <title>Cadastros</title>
        <meta charset="utf-8">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'tabelas.php';  ?>
    
    <!-- Bootstrap core CSS -->
    <link href="../CSS/bootstrap/bootstrap.min.css" rel="stylesheet">
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     
     <link rel="stylesheet" href="../CSS/form-basic.css">
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
            <div class="panel-heading">Artistas</div>
            
                
                <div class="main-content">

                    <form id="upload" class="form-basic" method="post" action="upload_Artistas.php">

            <div class="form-title-row">
                <h1>Informações</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nome do artista:</span>
                    <input type="text" name="nome">
                </label>
            </div>

            <div class="form-row">
                
                <label>
                    <span>Info:</span>
                    <textarea name="info" placeholder="Opcional"></textarea>
                </label>
                
            </div>
                        
            <div class="form-row">
                <button type="submit">Cadastrar</button>
            </div>

        </form>

    </div>
        
        </div>
            
        
    </body>
</html>
