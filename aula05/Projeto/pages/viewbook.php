<?php
    //Chama o cabeçalho
    require_once('../component/header.php');

    //Chama a conexão com o banco de dados
    require_once('conexao.php');

    //Lendo dados do banco de dados
    $control = $conecta->prepare("SELECT * FROM tb_livro ORDER BY titulo asc");
    $control->execute();

    //Pega toda a tabela e gurada em uma variável
    $resultado = $control->fetchALL(PDO::FETCH_ASSOC);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book's</title>
</head>
<body>
    <section class="container mt-3">
        <div class="row text-center">
            <?php
                foreach($resultado as $rows){
                   echo ("
                            <div class='col-3'>
                                <div class='card mt-3 mb-3' style='width: 15rem; box-shadow: 0 0 1em;'>
                                    <div class='card-header' style='font-size: 16px; font-bold: bold;'>
                                        " . $rows['titulo'] . "
                                    </div>
                                    <div class='card-body ' style='font-size: 13px;'>                                       
                                        <p class='card-text'> <strong> ISBN: </strong> " . $rows['isbn'] . " </p>
                                        <p class='card-text'> <strong> Ano publicação: </strong> " . $rows['ano'] . " </p>
                                        <p class='card-text'> <strong> Paginas: </strong> " . $rows['qtdPagina'] . " </p>

                                        <!--Botão excluir-->
                                        <a href='bookdel.php?id=" . $rows['idLivro'] . "' class='btn btn-danger btn-sm'>Excluir</a>


                                        <!--Botão editar-->
                                        <a href='formeditbook.php?id=" . $rows['idLivro'] . "' class='btn btn-success btn-sm'>Editar</a>
                                    </div>
                                </div>
                            
                            </div>                   
                        ");
                }            
            ?>
        </div>
    </section>
</body>
</html>
