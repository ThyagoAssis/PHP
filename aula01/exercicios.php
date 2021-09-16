<?php
    /* 
    1 - Escreva um programa que declare uma variável inteira e atribua o valor 10 a mesma. Declare uma variável real e atribua para a mesma o valor 20.3. Como saída o programa deverá imprimir, usando as variáveis declaradas, o seguinte resultado:

    O valor inteiro é 10.
    O valor real é 20.3.     
    */
    $inteiro = 10;
    $real = 20.3;

    echo "O valor inteiro é: $inteiro <br>";
    echo "O valor real é: $real <br>";

    /*
    2 - Escreva um programa que declare 6 variáveis do tipo caractere e atribua a elas as letras a, l, u, n, o, s. O programa deverá imprimir, usando todas as variáveis declaradas, o seguinte resultado: alunos. 
    
    */

    $var1 = 'a'; 
    $var2 = 'l'; 
    $var3 = 'u'; 
    $var4 = 'n';
    $var5 = 'o';
    $var6 = 's'; 

    //As {} servem para destacar cada variavel
    echo "{$var1}{$var2}{$var3}{$var4}{$var5}{$var6} <br>";
    
    // O ponto (.) concatena(junta) o conteúdo de duas ou mais variáveis 
    echo $var1 . $var2 . $var3 . $var4 . $var5 . $var6;






?>