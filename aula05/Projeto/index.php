<?php
    session_start();
    require_once('functions\function.php');

    if(logIn()){
        header('Location: http://localhost/php/aula05/Projeto/pages/');
    }else {
        header('Location: http://localhost/php/aula05/Projeto/login.php');
    }


?>