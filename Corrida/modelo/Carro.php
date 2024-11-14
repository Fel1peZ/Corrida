<?php

    class Carro{

        protected $aceleracao;
        protected $freio;
        protected $velocidade;








        /**
         * Get the value of aceleracao
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