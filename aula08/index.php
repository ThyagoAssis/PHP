<?php
    session_start();
    require_once('function.php');

    if(logIn()){
        header('Location: http://localhost/php/UC_PHP_BD/Projeto/pages/');
    }else {
        header('Location: http://localhost/php/UC_PHP_BD/Projeto/login.php');
    }


?>