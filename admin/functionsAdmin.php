<?php

function session_checker(){

    if (!isset($_SESSION['usuario_id'])){

         header ("Location: login.html");
        exit();

    }

}
function back(){
   
    //history.go(-1);
    javascript:history.go(-1);
}

