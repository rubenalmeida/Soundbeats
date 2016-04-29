<?php

function session_checker(){

    if (!isset($_SESSION['usuario_id'])){

         header ("Location: singin.html");
        exit();

    }

}

