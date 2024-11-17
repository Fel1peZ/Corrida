<?php

    class Carro{

        protected $nome;
        protected $aceleracao;
        protected $freio;
        protected $velocidade;



        public function freiar($dificuldadeFreio){
                if($this->freio >= $dificuldadeFreio){
                        return true;
                        }
                        else{
                        return false;
                        }         
        }

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
         * Get the value of nome
         */
        public function getAceleracao()
        {
                return $this->aceleracao;
        }

        /**
         * Set the value of aceleracao
         */
        public function setAceleracao($aceleracao): self
        {
                $this->aceleracao = $aceleracao;

                return $this;
        }

        /**
         * Get the value of freio
         */
        public function getFreio()
        {
                return $this->freio;
        }

        /**
         * Set the value of freio
         */
        public function setFreio($freio): self
        {
                $this->freio = $freio;

                return $this;
        }

        /**
         * Get the value of velocidade
         */
        public function getVelocidade()
        {
                return $this->velocidade;
        }

        /**
         * Set the value of velocidade
         */
        public function setVelocidade($velocidade): self
        {
                $this->velocidade = $velocidade;

                return $this;
        }
    }