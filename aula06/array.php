<?php

    //Criando array em php - 
    //Entenda array como se fosse uma gaveta com divisórias onde podemos nuner-las ou dar nomes a cada uma das divisões
    
    // Primeira forma
    $gaveta = ['colher', 'garfos', 'facas'];
    $carros = ["Chevrolet" => 'Onix', "Ford" => 'KA', "Fiat" => 'Uno'];

    //Segunda forma
    $notas = array();


    //Exibindo um array
    var_dump($gaveta);

    echo "<hr>";

    var_dump($carros);

    echo "<hr>";
    //Exibir diviórias específicas
    echo "Exibindo divsórias específicas (index): <br>";
    echo $gaveta[1];
    
    echo "<hr>";

    echo $carros['Chevrolet'];

    echo "<hr>";

    /*Desenvolver uma aplicação que gere uma lista de compras. Para essa tarefa você precisa:
        -> Pesquisar sobre Array em php (Como criar um array, como inserir dados em array)
        -> Pesquisar como ler e exibir dados de uma array utilizando o foreach do php.
    */

    echo "Lendo dados de uma lista de compras: <br>";
    $listaCompras = ['Feijão', 'Arroz', 'Batata'];
    
    //Adiciona elementos no array
    array_push($listaCompras, 'Melancia');
    array_push($listaCompras, 'Alcatra');

    //Funçao para leitura de um array
    foreach($listaCompras as $divisorias) {
        echo $divisorias . "<br>";
    }




?>