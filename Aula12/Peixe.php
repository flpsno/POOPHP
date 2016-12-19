<?php

require_once 'Animal.php';
class Peixe extends Animal {
    
    private $corEscama;
    
    public function alimentar() {
        echo "<p>comendo substancias</p>";
    }

    public function emitirSom() {
        echo "<p>peixe não emite som</p>";
    }

    public function locomover() {
        echo "<p>nadando</p>";
    }
    
    public function soltarBolha() {
        echo "<p>soltou uma bolha</p>";
    }
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
