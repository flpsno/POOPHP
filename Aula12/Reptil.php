<?php

require_once 'Animal.php';
class Reptil extends Animal {
    
    private $corEscama;
    
    public function alimentar() {
        echo "<p>comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>somd e reptil</p>";
    }

    public function locomover() {
        echo "<p>rastejando</p>";
    }
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
