<?php
    echo "<h1>Solução das atividades</h1>";

    /*
    3 -  Uma conta telefônica é composta dos seguintes custos:
            Assinatura: R $ 32,00
            Impulsos: R $ 0,09 por impulso que exceder a 90
            Chamadas p / celular: R $ 0,35 por impulso      
        Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 chamadas para celular imprimindo o resultado.     
    
    */
    echo "<h2> Exercício - 3 </h2>";

    $assinatura = 32.00;
    $impulso = 0.09;
    $celular = 0.35;

    $impulsoExcedido = 254 - 90;
    $totalLigacaoCelular = 23;

    $valorFatura = $assinatura + ($impulsoExcedido * $impulso) + ($totalLigacaoCelular * $celular);
    echo "O valor da Fatura é: " . $valorFatura;
    
    echo "<br><br> <hr> <br>";

    /*
        4 - Um professor atribui pesos de 1 a 4 para as notas de quatro alunos. A nota é calculada por meio da média ponderada (N1 * 1 + N2 * 2 + N3 * 3 + N4 * 4) / (1 + 2 + 3 + 4), onde N1 é a nota da primeira avaliação, N2 a da segunda , etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno
    */
    echo "<h2> Exercício - 4 </h2>";

    $p1 = 1; $p2 = 2; $p3 = 3; $p4 = 4;
    $nota1 = 8; $nota2 = 7.5; $nota3 = 10;  $nota4 = 9;
    $somaPesos = $p1 + $p2 + $p3 + $p4;

    $mediaPonderada = ($nota1*$p1+$nota2*$p2+$nota3*$p3+$nota4*$p4)/$somaPesos;

    echo "A nota Ponderada é: " . $mediaPonderada;

    echo "<br><br> <hr> <br>";

    /*
        5 - Escreva um programa que obtêm dois valores inteiros (variáveis A e B) e apresente as operações de adição, subtração, multiplicação e divisão de A por B
    */

    echo "<h2> Exercício - 5 </h2>";
    $a = 10;
    $b = 2;

    echo "A soma de $a e $b é: " . ($a+$b) . "<br>"; 
    echo "A subtração de $a e $b é: " . ($a-$b)  . "<br>" ;
    echo "A multiplicação de $a e $b é: " . ($a*$b) . "<br>" ;
    echo "A divisão de $a e $b é: " . ($a/$b);

    echo "<br><br> <hr> <br>";

    /*
        6 - Fazer um programa que imprime a média dos números 11, 19 e 7.    
    */
    echo "<h2> Exercício - 6 </h2>";
    $numero1 = 11;
    $numero2 = 19;
    $numero3 = 7;

    $media = ($numero1+$numero2+$numero3)/3;

    echo "A media dos valores dos valores 11,19 e 7 e: " . $media;
    

?>