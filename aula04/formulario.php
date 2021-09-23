<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Formulário</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="wrapper">
            <h2 class="mb-5 mt-3">Formulário de cadastro</h2>
            <div class="row bg-secondary p-2 text-white">
                <form action="cadastro.php">
                    <div class="form-group">
                        <label for="id_nome"> Nome: </label>
                        <input class="form-control" id="id_nome" type="text" placeholder="Insira o nome" name="txtNome" required>
                    </div>

                    <div class="form-group">                        
                        <label for="id_email"> Email: </label>
                        <input class="form-control" id="id_email" type="email" placeholder="Insira o email" name="txtEmail" required>
                    </div>
                    <button class="btn btn-dark" type="submit">Enviar</button>   
                </form>
            </div>        
        </div>
    </div>    
</body>
</html>