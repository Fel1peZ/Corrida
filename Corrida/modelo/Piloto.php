<?php

    require_once("Carro.php");

    class Piloto{

        private $nome;
        private $idade;
        private $habilidadePiloto;
        private Carro $carro ;


        public function precisaoNoVolante($dificuldadeObstaculo){

            if($this->habilidadePiloto  >= $dificuldadeObstaculo){
                return true;
            }
            else{
                return false;
            }

        }

        public function getCarro()
        {
                return $this->carro;
        }

        public function setCarro($carro): self
        {
                $this->carro = $carro;

                return $this;     
        }
        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of idade
         */
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         */
        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of habilidade
         */
        public function getHabilidade()
        {
                return $this->habilidadePiloto;
        }

        /**
         * Set the value of habilidade
         */
        public function setHabilidade($habilidade): self
        {
                $this->habilidadePiloto = $habilidade;

                return $this;
        }
    }