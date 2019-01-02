<?php
 
class Calculadora {
 
    public $numero1;
    public $numero2;
 
    public function getNumero1() {
        return $this->numero1;
    }
 
    public function getNumero2() {
        return $this->numero2;
    }
 
    public function setNumero1($numero1) {
        $this->numero1 = $numero1;
    }
 
    public function setNumero2($numero2) {
        $this->numero2 = $numero2;
    }
 
    public function Somar() {
        echo $total = $this->getNumero1() + $this->getNumero2();
    }
 
    public function Subtrair() {
        echo $total = $this->getNumero1() - $this->getNumero2();
    }
 
    public function Multiplicar() {
        echo $total = $this->getNumero1() * $this->getNumero2();
    }
 
    public function Dividir() {
        echo $total = $this->getNumero1() / $this->getNumero2();
        }
        
}
 