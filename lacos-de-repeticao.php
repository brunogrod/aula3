<?php

/*

    while - enquanto algo for verdadeiro faça

    while (condição é verdadeira)

    {

        faça o que está aqui    

    }



    for - para uma condição até um resultado faça


*/

$j = 1;

while($j <= 3){

    echo "{$j} - Vou arrebbentar no PHP<br>";

    $j = $j + 1;


}


echo "<hr>";
echo "<h2> MInha Tabuada</h2>";
$i = 1;
$num = 5;
while ($i<=10){

echo "{$i} x {$num} = ".$i*$num;
echo "<br>";

$i++; // $i = s= $i + 1

}