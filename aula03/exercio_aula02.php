<!-- Código PHP -->
<?php
    //A função empty verifica se um variável existe
    $valorInteiro = $_POST['valor'];
    $resto = $valorInteiro%2;
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1 - Elabore um algoritmo para ler um valor inteiro e informar, através de uma mensagem se este valor é um número par ou ímpar.</h2>    
    <form action="#" method="post">
        <label>Informe um valor</label>
        <input type="text" placeholder="Informe um valor" name="valor">
        <button type="submit">Enviar</button>
    </form>
    <?php
        
        if($resto == 0){
            echo "O número: " . $valorInteiro . " é par";
        }else {
            echo "O número: " . $valorInteiro . " é impar";
        }
        echo "<hr>";
    ?>
</body>
</html>