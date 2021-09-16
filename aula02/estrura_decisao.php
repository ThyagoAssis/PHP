<?php
    echo ("

    <h1> Estrura de Decisão </h1>
    <h2> Na programação nós temos alguns tipos de estrutura de decisão</h2>

    <h3>Os tipos são:  </h3>
    <ul>
        <li>Estrutura Simples</li>
        <li>Estrutura Composta</li>
        <li>Estrutura Encadeada</li>
        <li>Estrutura Ternária</li>
        <li>Estrutura Mútipla</li>
    </ul>

    <h3>Operadores Lógicos</h3>
        <ul>
            <li> = = Compara se dois valores possuem o mesmo valor</li>
            <li> = = = Compara se dois valores são identicos</li>
            <li> != Compara se dois valores são diferentes</li>
            <li> < Compara se o valor da direita é menor que o valor da esquerda</li>
            <li> > Compara se o valor da direita é maior que o valor da esquerda</li>
            <li> <= Compara se o valor da direita é menor ou igual que o valor da esquerda</li>
            <li> >= Compara se o valor da direita é maior ou igual que o valor da esquerda</li>
        </ul>    
    
    ");
    $idade = 18;
    //Estrutura simples: É dada por ter uma única ação 
    if ($idade >= 18) { echo "Ele pode ir a festa."; }

    
    echo "<hr>";

    //Estrutura Composta: é dada por ter uma açao e uma saída padrão
    if ($idade >= 18){
        echo "Ele pode ir a festa.";
    }else {
        echo "Ele nã pode ir a festa";
    }

    //Estrutura encadeada: é dada por ter mais de uma ação e somente uma ação

    $materia = "PHP";

    if ($materia == 'PHP') {
        echo "Linguagem de programação simples para Web";
    }elseif($materia == 'JAVA'){
        echo "Linguagem de programação Robusta";
    }elseif ($materia = 'Angular'){
        echo "Framework de desenvolvimento Web";
    }else {
        echo "Matéria não consta na sua grade!";
    }

    echo "<hr>";

    //Estrutura compacta: é dada pela ausencia das chaves

    if ($idade > = 18)
        echo "pode ir a festa";
    else 
        echo "Não pode ir a festa";
        

    //OBS: A estrutura compacta só pode ser utilizada quando so temos um única linha por bloco

    echo "<hr>";

    //Estrutura Ternária: É dada por definir a estrutura composta em única linha
    echo ($idade >= 18) ? "Poder ir a festa" : "Não pode ir a festa";

    echo "<hr>";

    //Decisão Multipla: é dado por definir casos de teste
    
    $opcao = 4;

    switch($opcao){
        case 1 :
            echo "A soma dos valores é: " . (1+2);
            break;
        case 2 : 
            echo "A multiplicação dos valores e:  " . (1 * 2);
            break;
        case 3 :
            echo "A divisão dos valores e:  " . (1 / 2);
            break;
        default:
            echo "Opção invalida";
            break;
    }









?>