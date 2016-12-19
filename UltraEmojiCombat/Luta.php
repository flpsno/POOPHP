<?php
    require_once 'Lutador.php';
    
class Luta {
    // atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    // métodos público
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() == $l2->getCategoria()
            && ($l1 != $l2)){
            $this->aprovada = TRUE;
            $this->desafiado = $l1;
            $this->desafiante = $l2;            
        } else {
            $this->aprovada = FALSE;
            $this->desafiado = NULL;
            $this->desafiante = NULL;
        }        
    }   
    
    public function lutar(){
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vendedor = rand(0,2);
            //
            switch ($vendedor){
                case 0: //empate
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: // desafiado vence
                    echo "<p>".$this->desafiado->getNome()." ganhou!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: // desafiante vence
                    echo "<p>".$this->desafiante->getNome()." ganhou!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer!</p>";
        }
    }
    
    // métodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


}
