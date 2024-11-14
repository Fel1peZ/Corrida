<?php 


class Bugatti{

    private $nitro ;


    

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