<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- CDN CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="wrapper">
                 
                <h2 class="mb-5 mt-3">Utilização do PDO para manipulação de banco de dados</h2>
            
            <div class="row bg-secondary p-2 text-white">
                
                    <form action="#" method="post">
                    <fieldset>
                        <legend>Formulário</legend>
                            <div class="form-group">
                                <label for="id_nome">Nome</label>
                                <input type="text" class="form-control" placeholder="Informe o nome" required id="id_nome" name="txtNome">
                            
                                <label for="id_email">E-mail</label>
                                <input type="email" class="form-control" placeholder="Informe o e-mail" required id="id_email" name="txtEmail">
                            </div>
                            <button type="submit" class="btn btn-dark">Enviar</button>
                        </fieldset>
                    </form>
                
            </div>

            <div class="row bg-info mt-4 p-2 text-white">                
                    <h4>Consulta</h4>
                    <address class="p-2 mt-3">                 
                     
                    </address>
            </div>
        </div>
    </div>
</body>
</html>