<?php

session_start();

if($_SESSION['auth'] == true){
    echo "You're authorized";
}else{
    echo "No way!";
}

var_dump($_SESSION['auth']);