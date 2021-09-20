<?php
/*Estruras de Repetição
    - for
    - while
    -do-wilhe
    -foreach

*/
//Estrutra For
//Precise contar ate 10
for($i = 0; $i <= 10; $i++){
    echo $i . "<br>";
}
echo "<hr>";

//Contar de 0 a 100 pulando de 5 em 5
for($i = 0; $i < 100; $i+=5 ){
    echo $i . "<br>";
}

echo "<hr>";
//Estrutura While
//Sintaxe while(condicao){}

$j = 0;
while($j < 10) {
    echo "Estou aprendendo PHP! <br>";
    $j++;
}

echo "<hr>";
//Criar um progarma que conte ate 10 e exiba amenssagem PHP quando for o valor 5

$v = 0;
while($v < 10){

    if($v == 5) {
        echo "PHP <br>";
    }else {
    echo $v . "<br>";
    }
    $v++;
}

//Estrutura do-while
//Sintaxe do{}while(condição)

echo "<hr>";
$z = 0;
do{
    echo "Estrutura de repetição do-while <br>";
    $z++;
}while($z <=5);

#While x Do-while
/**
 * O while: executa o teste no inicio do inteiração
 * D-While: executa o teste no final da inteiração, ele vai executar pleo menos uma vez.
 */

echo "<hr>";
//Contagem regressiva
for ($b = 10; $b >= 0 ; $b-=5 ){
    echo $b . "<br>";
}



?>