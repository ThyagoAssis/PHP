<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">
            <a href="#">
                <img src="img/logo/logo.png" alt="" class="img-fluid rounded">
            </a>
            <div class="row d-flex">
                <button class="btn btn-dark" data-toggle="modal" data-target="#modalExemplo">Entrar</button>
                <button class="btn btn-dark">Registre-se</button>
            </div>
        </div>
    </nav>
    <section class="bg-secondary mt-5">
        <div class="container bg-secondary mt-5">
            <div class="row mt-5">
                <div class="col-3 mt-3">
                    <img src="https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070__340.jpg" class="rounded img-thumbnail img_corpo" alt="..." width="150">
                </div>
                <div class="col-3 mt-3">
                    <img src="https://cdn.pixabay.com/photo/2015/11/19/21/14/glasses-1052023__340.jpg" class="rounded img-thumbnail img_corpo" alt="..." width="150">
                </div>
                <div class="col-3 mt-3">
                    <img src="https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428__340.jpg" class="rounded img-thumbnail img_corpo" alt="..." width="150">
                </div>
                <div class="col-3 mt-3">
                    <img src="https://cdn.pixabay.com/photo/2015/11/19/21/11/book-1052014__340.jpg" class="rounded img-thumbnail img_corpo" alt="..." width="150">
                </div>
            </div>
        </div>
    </section>

    <!--Corpo-->
    <div class="corpo container">
        
                <img src="https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070__340.jpg" class=" img_corpo rounded float-left " alt="..." height="200" width="200">
                <img src="https://cdn.pixabay.com/photo/2015/11/19/21/11/atlas-1052011__340.jpg" class="rounded float-right img_corpo" alt="..." height="200" width="200">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070__340.jpg" class="rounded float-left img_corpo" alt="..." height="200" width="200">
                <img src="https://cdn.pixabay.com/photo/2015/11/19/21/11/atlas-1052011__340.jpg" class="rounded float-right img_corpo" alt="..." height="200" width="200">
           
    </div>



    <!-- Modal -->
    <div class="modal fade align-self-center" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  bg-light ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="exemplo@mail.com" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Informe a senha" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary " data-dismiss="modal">Logar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>