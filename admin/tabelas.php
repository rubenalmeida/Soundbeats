<?php


        include "../php/config.php";
        

        $sql ="select nome , id_Artistas from artistas";
            $result = mysqli_query($link, $sql);

        //$registro = array ();
        //while ($dados = mysqli_fetch_assoc($result)){
        //    $registros[] = $dados;
       // }


        
          