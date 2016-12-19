<?php

require_once 'Animal.php';
class Ave extends Animal {
    
    private $corPena;
    //put your code here
    public function alimentar() {
        echo "<p>comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>som de ave</p>";
    }

    public function locomover() {
        echo "<p>voando</p>";
    }
    
    public function fazerNinho() {
        echo "<p>fazendo ninho</p>";
    }
            
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }



}
