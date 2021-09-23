<?php
    //Conexão com o banco de dados
    require_once('conexao.php');

    //Captura os dados vindo do input do formulário
    $nome = $_GET['txtNome'];
    $email = $_GET['txtEmail'];   
   
    //Insere os dados no banco de dados
    $control = $conecta->prepare("INSERT INTO tb_aluno(nome,email) VALUES(:NOME, :EMAIL)");
    $control->bindParam("NOME",  $nome);
    $control->bindParam("EMAIL", $email);

    $control->execute();








?>