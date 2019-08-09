<?php
   require_once("Operations.php");
    class Div extends Operations{


    public function calcule($num1, $num2){
        if($num2 == 0 ){
            return "INFINITO";
        }else{
            return ($num1 / $num2);
    }

    }
}