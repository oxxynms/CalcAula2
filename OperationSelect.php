<?php
require_once("Div.php");
require_once("Mult.php");
require_once("Sub.php");
require_once("Plus.php");

class OperationSelect {
    private $op;
    private $return;

    public function selectOperation($n1, $n2, $type){
        switch($type){
            case 'soma' :
                $this->op = new Plus;
                $this->return = $this->op->calcule($n1, $n2);
                unset($this->op);
            break;
            case 'subtracao' :
                $this->op = new Sub;
                $this->return = $this->op->calcule($n1, $n2);
                unset($this->op);
            break;
            case 'multiplicacao' :
                $this->op = new Mult;
                $this->return = $this->op->calcule($n1, $n2);
                unset($this->op);
            break;
            case 'divisao' :
                $this->op = new Div;
                $this->return = $this->op->calcule($n1, $n2);
                unset($this->op);
            break;
            default:
                $this->return = "operacao invalida";
        }

        return $this->return;
    }

}