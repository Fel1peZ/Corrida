<?php 

require_once("Carro.php");
class Camaro extends Carro{


private $superAceleracao;

public function __construct()
{
    $this->nome = "Camaro";
    $this->superAceleracao = 5;
    $this->aceleracao = 7;
    $this->velocidade = 5;
    $this->freio = 3;
}

public function superAcelerar(){
    return $this->superAceleracao + $this->aceleracao;
}
/**
 * Get the value of superAceleracao
 */
public function getSuperAceleracao()
{
return $this->superAceleracao;
}

/**
 * Set the value of superAceleracao
 */
public function setSuperAceleracao($superAceleracao): self
{
$this->superAceleracao = $superAceleracao;

return $this;
}
}