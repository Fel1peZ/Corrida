<?php


class Ferrari{
    private $desvio;



    public function desviar(){

        
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