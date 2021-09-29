<?php 

    //Testa de o id foi passado
    if (isset($_GET['id'])) {

        //Chama a conexao com o banco de dados
        require_once('conexao.php');

        //Salva o id do livro na variável
        $id = $_GET['id'];

        //Exclui o livro
        $control = $conecta->prepare("DELETE FROM tb_livro WHERE idLivro=:ID");
        $control->execute(array('ID'=>$id));

        //Retorna para a pagina livros
        header('Location: http://localhost/php/aula05/Projeto/pages/viewbook.php');
    }


   
?>