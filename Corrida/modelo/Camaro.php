<?php 


class Camaro{


private $superAceleracao;












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