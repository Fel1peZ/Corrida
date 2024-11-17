<?php 

require_once("Carro.php");
class Bugatti extends Carro{

    private $nitro;


    public function __construct()
    {
        $this->nome = "Bugatti";
        $this->nitro = 5;
        $this->aceleracao = 3;
        $this->velocidade = 7;
        $this->freio = 5;
    }


    public function usarNitro(){

       return $this->nitro + $this->aceleracao ;

    }

    /**
     * Get the value of nitro
     */
    public function getNitro()
    {
        return $this->nitro;
    }

    /**
     * Set the value of nitro
     */
    public function setNitro($nitro): self
    {
        $this->nitro = $nitro;

        return $this;
    }
}