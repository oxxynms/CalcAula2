<?php
    require_once("OperationSelect.php");
   

    
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $type = $_GET["type"];
    $result;

    if ($n1 == null || $n2 == null || $type == null){
        echo "use a url com as variaveis n1, n2 e type, metodo GET<br>";
        echo 'exemplo: ?n1=2&n2=5&type=divisao';
    }else{
        $send = new OperationSelect;
        $result = $send->selectOperation($n1, $n2, $type);
        echo "O resultado é: $result";
    }