<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaBanco
 *
 * @author felipe-dev
 */
class ContaBanco {
    //put your code here
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    function __construct() {
        $this->saldo = 0;
        $this->status = FALSE;
    }
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(True);
        
        if ($t = "CC"){
            $this->setSaldo(50);
        } else if ($t = "CP") {
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "Conta com dinheiro";
        } else if ($this->getSaldo() < 0){
            echo "Conta em débito";
        } else {
            $this->setStatus(FALSE);
        }            
    }

    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "impossível depositar!";
        }
    }
    
    public function sacar(){
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "impossivel sacar";
            }        
        } else {
            echo "impossível sacar";
        }           
    }
    
    
}
