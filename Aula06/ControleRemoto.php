<?php

/**
 * Description of ControleRemoto
 *
 * @author felipe-dev
 */
require_once 'Controlador.php';

class ControleRemoto implements Controlador {
    // atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    // métodos especiais
    function __construct() {
        $this->volume = 50;
        $this->ligado = FALSE;
        $this->tocando = FALSE;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<p>----------- Menu --------- </p>";
        echo "<br>Está ligado?: ".($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando?: ".($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: ".$this->getVolume();        
        
        for ($i=0; $i <= $this->getVolume(); $i +=10){
            echo "|";
        }
        
        echo "<br>";        
    }

    public function desligar() {
        $this->setLigado(FALSE);
    }

    public function fecharMenu() {
        echo "<br>Fechando Menu....";
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function ligar() {
        $this->setLigado(TRUE);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "ERRO: não posso aumentar o volume";
        }
    }

    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() -5);
        }  else {
            echo "ERRO: não posso diminuir o volume";
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(FALSE);
        }
    }

    public function play() {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(TRUE);
        }
    }

}
