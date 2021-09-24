<?php  

    //Testa se foi digitado algo no formulário
    if(isset($_POST['txtTitle'])  &&  isset( $_POST['txtISBN'])  &&  isset($_POST['txtANO'])  &&  isset( $_POST['txtPagina'])){

         //Chama o arquivo de conexão com o Banco de dados
        require_once('conexao.php');

        //Criar as variáveis
        $titulo = $_POST['txtTitle'];
        $isbn = $_POST['txtISBN'];
        $ano = $_POST['txtANO'];
        $paginas = $_POST['txtPagina'];

        //Inserção no Banco de dados

        $control = $conecta->prepare("INSERT INTO tb_livro(titulo, isbn, ano, qtdPagina) VALUES (:TITULO, :ISBN, :ANO, :PAGINA)");
        $control->bindParam("TITULO", $titulo);
        $control->bindParam("ISBN", $isbn);
        $control->bindParam("ANO", $ano);
        $control->bindParam("PAGINA", $paginas);

        $control->execute();

    }


    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="shortcut icon" type="imagex/png" href="../img/logo/logo.png">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book's</title>
</head>

<body class="bg-light">
    <!-- Cabeçaho -->
    <?php
        require_once('../component/header.php');
    ?>

    <section class="container justify-content-center ">

        <div class="wrapper bg-light mt-5 ">
            <h2 class="mb-3 mt-3 text-center">Cadastro de Livros</h2>
            <form action="#" method="POST">
                <div class="form-row">
                    <div class="col form-group">
                        <label for="id_title">Título:</label>
                        <input type="text" placeholder="Informe o Título" name="txtTitle" class="form-control" id="id_title">
                    </div>
                   <!--  <div class="col form-group">
                        <label for="id_autor">Autor:</label>
                        <select name="txtAutor" placeholder="ISBN" id="id_autor" class="form-control">
                            <option> Desconhecido </option>
                            <option> José Maria </option>
                            <option> Maria José </option>
                            <option> Carlos Silva </option>
                            <option> Ana Leite</option>
                            <option> Claudio Cortez </option>
                        </select>
                    </div> -->
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="id_isbn">ISBN:</label>
                        <input class="form-control" type="text" placeholder="ISBN" name="txtISBN" id="id_isbn">
                    </div>
                    <div class="col">
                        <label for="id_ano">ANO:</label>
                        <input class="form-control" type="date" placeholder="Ano" name="txtANO" id="id_ano">
                    </div>
                    <div class="col">
                    <label for="id_qtdpag">Páginas:</label>
                        <input class="form-control" type="number" placeholder="Quantidade Páginas" name="txtPagina" id="id_qtdpag">
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col text-center">
                        <button class="btn btn-secondary ">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>