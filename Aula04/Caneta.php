<?php

class Caneta {
    //put your code here
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    
    function __construct($modelo, $ponta, $cor, $tampada) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->tampada = $tampada;
    }

        public function tampar(){
        $this->tampada = TRUE;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }


}
