<?php

include "config.php";
 
if(isset($_REQUEST['file']))
{
        $errors= array();
 
        $file_name = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $file_size = $_FILES["file"]["size"];
        $file_type = $_FILES["file"]["type"];
        $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
        $path = "upload/".$file_name;

        $expensions= array("mp3");

        if(in_array($file_ext,$expensions)=== false)
        {
            $errors[]="extension not allowed, please choose a mp3 file.";
        }

        if($file_size > 10485760)
        {
            $errors[]='File size must be excately 10 MB';
        }

        if(empty($errors)==true)
        {
            move_uploaded_file($file_tmp,"upload/".$file_name);
            echo "Success";
        }
        else
        {
            print_r($errors);
        }


        $table = $wpdb->prefix."image";
        $data = array( 
                 
                    'image_path'    => $path 
        );      

        $insert = $wpdb->insert($table, $data);
}