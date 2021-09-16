<?php
    echo ("
        <h1>Variáveis</h1> 
        <h2>O que são Variáveis?</h2>

        <p>
            As variáveis são elementos básicos na programação, pois são elas que armazenam os dados que usaremos em nossa Aplicação.
        </p>

        <h2>Tipos de variáveis</h2>
        <ul>
            <li> string - Carecteres ou texto </li>
            <li> integer - Números inteiros (positivos, negativos e o zero)</li>
            <li> float - Valores que possuem virgulas (Numeros fracionarios)</li>]
            <li> boolean - Valores veradeiro(true) ou falso(false) </li>
            <li> array - É uma caixa com divisões ()</li>        
        </ul>

        <p> 
            <strong> Obs: </strong>
            O PHP é uma linguagem de programação fracamente tipada, ou seja, não é necessário informar o tipo de dado guardado naquela variável. 
        </p>

        <h2>Regras para criação de nome de varáveis</h2>
        <ul>
            <li> Nome dentro do contexto (nome, telefone etc..)</li>
            <li> Utilizar o padrão camelCase (nomeCompleto)</li>
            <li> O único caracter especial possível é o underline _ (_teste, nome_completo)</li>
            <li> Usar numeros somente no final do nome (var1, var2) </li>
        </ul>
    ");

    echo "<br><br> Declarando variavel do tipo string <br><br>";
    $minhaVar = 'Estude PHP';
    var_dump($minhaVar);

    echo "<br><br> Declarando variavel do tipo integer <br><br>";
    $minhaVar2 = 100;
    var_dump($minhaVar2);

    //$minhaVar3 = '100';
    //var_dump($minhaVar3)

    echo "<br><br> Declarando variavel do tipo float <br><br>";
    $minhaVar4 = 10.5;
    var_dump($minhaVar4);

    echo "<br><br> Declarando variavel do tipo boolean <br><br>";
    $minhaVar5 = true;
    var_dump($minhaVar5);

    echo "<br><br> Declarando variavel do tipo array <br><br>";
    $minhaVar6 = [10, 'pera', 'mamão'];
    var_dump($minhaVar6);
    
    





?>