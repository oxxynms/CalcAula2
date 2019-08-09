<?php
    require_once("Operations.php");
    class Sub extends Operations{


    public function calcule($num1, $num2){
        return $num1 - $num2;
    }

    }