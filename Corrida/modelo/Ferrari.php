<?php

require_once("Carro.php");
class Ferrari extends Carro{

    private $desvio;



    public function __construct()
    {
        $this->nome = "Ferrari";
        $this->desvio = 5;
        $this->aceleracao = 5;
        $this->velocidade = 3;
        $this->freio = 7;
    }


    public function desviar($dificuldadeDesvio){
          if($this->desvio >= $dificuldadeDesvio){
                return true;
            }
            else{
                return false;
            }
    }



    /**
     * Get the value of desvio
     */
    public function getDesvio()
    {
        return $this->desvio;
    }

    /**
     * Set the value of desvio
     */
    public function setDesvio($desvio): self
    {
        $this->desvio = $desvio;

        return $this;
    }
}