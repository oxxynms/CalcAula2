<?php
    include_once("Operations.php");
    class Plus extends Operations{


    public function calcule($num1, $num2){
        return $num1 + $num2;
    }

    }