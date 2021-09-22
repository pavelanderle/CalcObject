<?php

class Calc{
    private $operandA;
    private $operandB;

    public function __construct($operandA,$operandB){
        $this->setOperandA($operandA);
        $this->setOperandB($operandB);
    }

    public function getOperandA(){
        return $this->operandA;
    }

    public function getOperandB(){
        return $this->operandB;
    }

    public function setOperandA($operandA){
        $this->operandA = $operandA;
    }

    public function setOperandB($operandB){
        $this->operandB=$operandB;
    }

    // todo methods +,-,/,*
}