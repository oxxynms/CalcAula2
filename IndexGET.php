<?php
    require_once("OperationSelect.php");
   

    
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $type = $_GET["type"];
    $result;
    $send = new OperationSelect;
    echo "use a url com as variaveis n1, n2 e type, metodo GET \n";
    $result = $send->selectOperation($n1, $n2, $type);
    
    echo "O resultado é: $result";
