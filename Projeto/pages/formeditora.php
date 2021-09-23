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
    <title>Clientes</title>
</head>

<body class="bg-light">
    <!-- Cabeçaho -->
    <?php
    require_once('../component/header.php');
    ?>


    <section class=" container  ">
        <div class=" container  justify-content-center ">
            <div class="wrapper bg-light mt-5 ">
                <h2 class="mb-3 mt-3 text-center">Cadastro de Editoras</h2>
                <form action="">
                    <div class="form-row">
                        <div class="col form-group">
                            <label for="id_nome">Nome:</label>
                            <input type="text" placeholder="Informe o Nome" name="txtName" class="form-control" id="id_nome">
                        </div>
                        <div class="col">
                            <label for="id_cnpj"> CNPJ:</label>
                            <input class="form-control" type="text" placeholder="99.999.999/0001-99" name="txtCNPJ" id="id_cnpj">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="id_end">Endereço:</label>
                            <input class="form-control" type="email" placeholder="rua sem numero, centro - RJ" name="txtMail" id="id_end">
                        </div>
                        <div class="col">
                            <label for="id_mail">Telefone:</label>
                            <input class="form-control" type="text" placeholder="(999) 99999-9999)" name="txtTel" id="id_tel">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col text-center">
                            <button class="btn btn-secondary ">Cadastrar</button>
                        </div>

                    </div>


                </form>


            </div>
        </div>
    </section>

</body>

</html>