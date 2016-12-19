<?php

require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    public function alimentar() {
        echo "<p>mamando</p>";
    }

    public function emitirSom() {
        echo "<p>som de mamifero</p>";        
    }

    public function locomover() {
        echo "<p>correndo</p>";        
    }

    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


}
