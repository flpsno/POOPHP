<?php

require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p>Renovando a bolsa de ".$this->getNome()."</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>".$this->getNome()." é bolsista. portanto, paga com desconto.</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


}
