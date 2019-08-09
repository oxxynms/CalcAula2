<?php
require_once("OperationSelect.php");

$n1;
$n2;
$type;
$result;
$send;
$handle;

echo 'calculadora simples orientada a objeto', PHP_EOL;
echo 'digite o primeiro numero:', PHP_EOL;
$handle = fopen ("php://stdin","r");
$n1 = fgets($handle);
echo 'digite a operacao EX: soma, subtracao, divsao ou multiplicacao', PHP_EOL;
$handle = fopen ("php://stdin","r");
$type = fgets($handle);
$type = substr($type, 0, -2);
echo 'digite o segundo numero: ', PHP_EOL;
$handle = fopen ("php://stdin","r");
$n2 = fgets($handle);
$send = new OperationSelect;
echo "$type", PHP_EOL;
$result = $send->selectOperation($n1, $n2, $type);
echo PHP_EOL;
echo "Resultado: $result", PHP_EOL;