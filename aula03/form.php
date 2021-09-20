<?php
    $nome = empty($_GET['txtNome']);
    $email = empty($_GET ['txtEmail']) ? "Email" : $_GET ['txtEmail'];    
    $frutas = ['maça', 'pera'];
    function add() {
        array_push($frutas, $nome); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="wrapper">
            <h2 class="mb-5 mt-3">Resolução de exercicios</h2>
        
            <div class="row bg-secondary p-2 text-white">
                <form action="">
                    <fieldset>
                        <legend>Formulário</legend>
                        <form>
                            <div class="form-group">
                                <label for="id_nome">Nome:</label>
                                <input type="text" class="form-control" id="id_nome" placeholder="Informe o Nome" name="txtNome" required>
                            </div>
                            <div class="form-group">
                                <label for="id_email">Email:</label>
                                <input type="text" class="form-control" id="id_email" placeholder="Informe o Nome" name="txtEmail" required>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="add()">Enviar</button>
                        </form>
                    </fieldset>
                </form>
            </div>

            <div class="jumbotron">

                <blockquote class="blockquote">
                <?php 
                    echo "Nome: " . $nome  . "<br>";
                    echo "Email:" . $email;                      
                
                ?>
                
                <?php  print_r($frutas);?>
                </blockquote>
               
            </div>
        </div>        

       

    </div>
    
</body>
</html>