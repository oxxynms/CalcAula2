<?php
    require_once("OperationSelect.php");
   

    
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $type = $_POST["tipo"];
    $result;
    $send = new OperationSelect;
    $result = $send->selectOperation($n1, $n2, $type);
    
    echo "O resultado é: $result";

