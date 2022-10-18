<?php

$valor = $_POST['Pnum'];
$Segvalor = $_POST['Snum'];
$calculo = $valor + $Segvalor;

echo "a soma dos dois valores selecionados será: " . $calculo ;

if ($calculo >= 20)
{
    echo "a soma do valor que digitou era maior que vinte, então acrescentado mais 8 a soma fica: " . $calculo + 8;
}

else
{
    echo "a soma do valor que digitou era menor que vinte, então será tirado -5 fica: " . $calculo - 5;
}
?>
