<?php
    if(isset($_COOKIE["authorize"])){
        if($_COOKIE["authorize"] == 0){
            
        }
        else {
            echo "nice try";
        }
        
    }
    else {
        header("HTTP/1.1 403 Forbidden");
        exit;
    }
?>